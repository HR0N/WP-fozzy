<?php
namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductCategoryList class.
 */
class ProductCategoryList extends AbstractBlock {

	/**
	 * Block name.
	 *
	 * @var string
	 */
	protected $block_name = 'product-category-list';

	/**
	 * API version name.
	 *
	 * @var string
	 */
	protected $api_version = '2';


	/**
	 * Get block supports. Shared with the frontend.
	 * IMPORTANT: If you change anything here, make sure to update the JS file too.
	 *
	 * @return array
	 */
	protected function get_block_type_supports() {
		return array(
			'color'                  =>
			array(
				'text'                            => true,
				'link'                            => true,
				'background'                      => false,
				'__experimentalSkipSerialization' => true,
			),
			'typography'             =>
			array(
				'fontSize'                        => true,
				'__experimentalFontStyle'         => true,
				'__experimentalFontWeight'        => true,
				'__experimentalSkipSerialization' => true,
			),
			'__experimentalSelector' => '.wc-block-components-product-category-list',
		);
	}

	/**
	 * Register script and style assets for the block type before it is registered.
	 *
	 * This registers the scripts; it does not enqueue them.
	 */
	protected function register_block_type_assets() {
		parent::register_block_type_assets();
		$this->register_chunk_translations( [ $this->block_name ] );
	}
}
