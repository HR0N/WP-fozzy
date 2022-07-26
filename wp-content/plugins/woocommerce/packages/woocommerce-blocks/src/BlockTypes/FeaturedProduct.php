<?php
namespace Automattic\WooCommerce\Blocks\BlockTypes;

use Automattic\WooCommerce\Blocks\Utils\StyleAttributesUtils;

/**
 * FeaturedProduct class.
 */
class FeaturedProduct extends AbstractDynamicBlock {
	/**
	 * Block name.
	 *
	 * @var string
	 */
	protected $block_name = 'featured-product';

	/**
	 * Default attribute values.
	 *
	 * @var array
	 */
	protected $defaults = array(
		'align' => 'none',
	);

	/**
	 * Global style enabled for this block.
	 *
	 * @var array
	 */
	protected $global_style_wrapper = array(
		'text_color',
		'font_size',
		'border_color',
		'border_radius',
		'border_width',
		'background_color',
		'text_color',
		'padding',
	);

	/**
	 * Get the supports array for this block type.
	 *
	 * @see $this->register_block_type()
	 * @return string;
	 */
	protected function get_block_type_supports() {
		return array(
			'color' => array(
				'__experimentalDuotone' => '.wc-block-featured-product__background-image',
			),
		);
	}

	/**
	 * Render the Featured Product block.
	 *
	 * @param array  $attributes Block attributes.
	 * @param string $content    Block content.
	 * @return string Rendered block type output.
	 */
	protected function render( $attributes, $content ) {
		$id      = absint( isset( $attributes['productId'] ) ? $attributes['productId'] : 0 );
		$product = wc_get_product( $id );
		if ( ! $product ) {
			return '';
		}
		$attributes = wp_parse_args( $attributes, $this->defaults );

		$attributes['height'] = isset( $attributes['height'] ) ? $attributes['height'] : wc_get_theme_support( 'featured_block::default_height', 500 );

		$title = sprintf(
			'<h2 class="wc-block-featured-product__title">%s</h2>',
			wp_kses_post( $product->get_title() )
		);

		if ( $product->is_type( 'variation' ) ) {
			$title .= sprintf(
				'<h3 class="wc-block-featured-product__variation">%s</h3>',
				wp_kses_post( wc_get_formatted_variation( $product, true, true, false ) )
			);
		}

		$desc_str = sprintf(
			'<div class="wc-block-featured-product__description">%s</div>',
			wc_format_content( wp_kses_post( $product->get_short_description() ? $product->get_short_description() : wc_trim_string( $product->get_description(), 400 ) ) )
		);

		$price_str = sprintf(
			'<div class="wc-block-featured-product__price">%s</div>',
			wp_kses_post( $product->get_price_html() )
		);

		$styles  = $this->get_styles( $attributes );
		$classes = $this->get_classes( $attributes );

		$output  = sprintf( '<div class="%1$s wp-block-woocommerce-featured-product" style="%2$s">', esc_attr( trim( $classes ) ), esc_attr( $styles ) );
		$output .= '<div class="wc-block-featured-product__wrapper">';
		$output .= $this->render_overlay( $attributes );
		$output .= $this->render_image( $attributes, $product );
		$output .= $title;
		if ( $attributes['showDesc'] ) {
			$output .= $desc_str;
		}
		if ( $attributes['showPrice'] ) {
			$output .= $price_str;
		}
		$output .= '<div class="wc-block-featured-product__link">' . $content . '</div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	/**
	 * Renders the featured image
	 *
	 * @param array       $attributes Block attributes. Default empty array.
	 * @param \WC_Product $product Product object.
	 *
	 * @return string
	 */
	private function render_image( $attributes, $product ) {
		$style      = '';
		$image_size = 'large';
		if ( 'none' !== $attributes['align'] || $attributes['height'] > 800 ) {
			$image_size = 'full';
		}

		$style .= sprintf( 'object-fit: %s;', $attributes['imageFit'] );

		if ( $attributes['mediaId'] ) {
			$image = wp_get_attachment_image_url( $attributes['mediaId'], $image_size );
		} else {
			$image = $this->get_image( $product, $image_size );
		}

		if ( is_array( $attributes['focalPoint'] ) && 2 === count( $attributes['focalPoint'] ) ) {
			$style .= sprintf(
				'object-position: %s%% %s%%;',
				$attributes['focalPoint']['x'] * 100,
				$attributes['focalPoint']['y'] * 100
			);
		}

		if ( ! empty( $image ) ) {
			return sprintf(
				'<img alt="%1$s" class="wc-block-featured-product__background-image" src="%2$s" style="%3$s" />',
				wp_kses_post( $attributes['alt'] ?: $product->get_name() ),
				esc_url( $image ),
				$style
			);
		}

		return '';
	}

	/**
	 * Renders the block overlay
	 *
	 * @param array $attributes Block attributes. Default empty array.
	 *
	 * @return string
	 */
	private function render_overlay( $attributes ) {
		$overlay_styles = '';

		if ( isset( $attributes['overlayColor'] ) ) {
			$overlay_styles = sprintf( 'background-color: %s', $attributes['overlayColor'] );
		} elseif ( isset( $attributes['overlayGradient'] ) ) {
			$overlay_styles = sprintf( 'background-image: %s', $attributes['overlayGradient'] );
		} else {
			$overlay_styles = 'background-color: #000000';
		}

		return sprintf( '<div class="wc-block-featured-product__overlay" style="%s"></div>', esc_attr( $overlay_styles ) );
	}

	/**
	 * Get the styles for the wrapper element (background image, color).
	 *
	 * @param array $attributes Block attributes. Default empty array.
	 *
	 * @return string
	 */
	public function get_styles( $attributes ) {
		$style = '';

		$min_height = isset( $attributes['minHeight'] ) ? $attributes['minHeight'] : wc_get_theme_support( 'featured_block::default_height', 500 );

		if ( isset( $attributes['minHeight'] ) ) {
			$style .= sprintf( 'min-height:%dpx;', intval( $min_height ) );
		}

		$global_style_style = StyleAttributesUtils::get_styles_by_attributes( $attributes, $this->global_style_wrapper );
		$style             .= $global_style_style;

		return $style;
	}

	/**
	 * Get class names for the block container.
	 *
	 * @param array $attributes Block attributes. Default empty array.
	 * @return string
	 */
	public function get_classes( $attributes ) {
		$classes = array( 'wc-block-' . $this->block_name );

		if ( isset( $attributes['align'] ) ) {
			$classes[] = "align{$attributes['align']}";
		}

		if ( isset( $attributes['dimRatio'] ) && ( 0 !== $attributes['dimRatio'] ) ) {
			$classes[] = 'has-background-dim';

			if ( 50 !== $attributes['dimRatio'] ) {
				$classes[] = 'has-background-dim-' . 10 * round( $attributes['dimRatio'] / 10 );
			}
		}

		if ( isset( $attributes['contentAlign'] ) && 'center' !== $attributes['contentAlign'] ) {
			$classes[] = "has-{$attributes['contentAlign']}-content";
		}

		if ( isset( $attributes['className'] ) ) {
			$classes[] = $attributes['className'];
		}

		$global_style_classes = StyleAttributesUtils::get_classes_by_attributes( $attributes, $this->global_style_wrapper );
		$classes[]            = $global_style_classes;

		return implode( ' ', $classes );
	}

	/**
	 * Returns the main product image URL.
	 *
	 * @param \WC_Product $product Product object.
	 * @param string      $size    Image size, defaults to 'full'.
	 * @return string
	 */
	public function get_image( $product, $size = 'full' ) {
		$image = '';
		if ( $product->get_image_id() ) {
			$image = wp_get_attachment_image_url( $product->get_image_id(), $size );
		} elseif ( $product->get_parent_id() ) {
			$parent_product = wc_get_product( $product->get_parent_id() );
			if ( $parent_product ) {
				$image = wp_get_attachment_image_url( $parent_product->get_image_id(), $size );
			}
		}

		return $image;
	}

	/**
	 * Extra data passed through from server to client for block.
	 *
	 * @param array $attributes  Any attributes that currently are available from the block.
	 *                           Note, this will be empty in the editor context when the block is
	 *                           not in the post content on editor load.
	 */
	protected function enqueue_data( array $attributes = [] ) {
		parent::enqueue_data( $attributes );
		$this->asset_data_registry->add( 'min_height', wc_get_theme_support( 'featured_block::min_height', 500 ), true );
		$this->asset_data_registry->add( 'default_height', wc_get_theme_support( 'featured_block::default_height', 500 ), true );
	}
}
