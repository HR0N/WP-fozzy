/**
 * External dependencies
 */
import { __ } from '@wordpress/i18n';
import { BlockControls, InspectorControls } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render';
import {
	Button,
	Disabled,
	PanelBody,
	Placeholder,
	ToolbarGroup,
	withSpokenMessages,
} from '@wordpress/components';
import { Component } from '@wordpress/element';
import { Icon, category } from '@wordpress/icons';
import PropTypes from 'prop-types';
import GridContentControl from '@woocommerce/editor-components/grid-content-control';
import GridLayoutControl from '@woocommerce/editor-components/grid-layout-control';
import ProductAttributeTermControl from '@woocommerce/editor-components/product-attribute-term-control';
import ProductOrderbyControl from '@woocommerce/editor-components/product-orderby-control';
import ProductStockControl from '@woocommerce/editor-components/product-stock-control';
import { gridBlockPreview } from '@woocommerce/resource-previews';
import { getSetting } from '@woocommerce/settings';

/**
 * Component to handle edit mode of "Products by Attribute".
 */
class ProductsByAttributeBlock extends Component {
	getInspectorControls() {
		const { setAttributes } = this.props;
		const {
			attributes,
			attrOperator,
			columns,
			contentVisibility,
			orderby,
			rows,
			alignButtons,
			stockStatus,
		} = this.props.attributes;

		return (
			<InspectorControls key="inspector">
				<PanelBody
					title={ __( 'Layout', 'woocommerce' ) }
					initialOpen
				>
					<GridLayoutControl
						columns={ columns }
						rows={ rows }
						alignButtons={ alignButtons }
						setAttributes={ setAttributes }
						minColumns={ getSetting( 'min_columns', 1 ) }
						maxColumns={ getSetting( 'max_columns', 6 ) }
						minRows={ getSetting( 'min_rows', 1 ) }
						maxRows={ getSetting( 'max_rows', 6 ) }
					/>
				</PanelBody>
				<PanelBody
					title={ __( 'Content', 'woocommerce' ) }
					initialOpen
				>
					<GridContentControl
						settings={ contentVisibility }
						onChange={ ( value ) =>
							setAttributes( { contentVisibility: value } )
						}
					/>
				</PanelBody>
				<PanelBody
					title={ __(
						'Filter by Product Attribute',
						'woocommerce'
					) }
					initialOpen={ false }
				>
					<ProductAttributeTermControl
						selected={ attributes }
						onChange={ ( value = [] ) => {
							const result = value.map(
								( { id, attr_slug: attributeSlug } ) => ( {
									id,
									attr_slug: attributeSlug,
								} )
							);
							setAttributes( { attributes: result } );
						} }
						operator={ attrOperator }
						onOperatorChange={ ( value = 'any' ) =>
							setAttributes( { attrOperator: value } )
						}
						isCompact={ true }
					/>
				</PanelBody>
				<PanelBody
					title={ __( 'Order By', 'woocommerce' ) }
					initialOpen={ false }
				>
					<ProductOrderbyControl
						setAttributes={ setAttributes }
						value={ orderby }
					/>
				</PanelBody>
				<PanelBody
					title={ __(
						'Filter by stock status',
						'woocommerce'
					) }
					initialOpen={ false }
				>
					<ProductStockControl
						setAttributes={ setAttributes }
						value={ stockStatus }
					/>
				</PanelBody>
			</InspectorControls>
		);
	}

	renderEditMode() {
		const { debouncedSpeak, setAttributes } = this.props;
		const blockAttributes = this.props.attributes;
		const onDone = () => {
			setAttributes( { editMode: false } );
			debouncedSpeak(
				__(
					'Showing Products by Attribute block preview.',
					'woocommerce'
				)
			);
		};

		return (
			<Placeholder
				icon={ <Icon icon={ category } /> }
				label={ __(
					'Products by Attribute',
					'woocommerce'
				) }
				className="wc-block-products-grid wc-block-products-by-attribute"
			>
				{ __(
					'Display a grid of products from your selected attributes.',
					'woocommerce'
				) }
				<div className="wc-block-products-by-attribute__selection">
					<ProductAttributeTermControl
						selected={ blockAttributes.attributes }
						onChange={ ( value = [] ) => {
							const result = value.map(
								( { id, attr_slug: attributeSlug } ) => ( {
									id,
									attr_slug: attributeSlug,
								} )
							);
							setAttributes( { attributes: result } );
						} }
						operator={ blockAttributes.attrOperator }
						onOperatorChange={ ( value = 'any' ) =>
							setAttributes( { attrOperator: value } )
						}
					/>
					<Button isPrimary onClick={ onDone }>
						{ __( 'Done', 'woocommerce' ) }
					</Button>
				</div>
			</Placeholder>
		);
	}

	render() {
		const { attributes, name, setAttributes } = this.props;
		const { editMode } = attributes;

		if ( attributes.isPreview ) {
			return gridBlockPreview;
		}

		return (
			<>
				<BlockControls>
					<ToolbarGroup
						controls={ [
							{
								icon: 'edit',
								title: __(
									'Edit selected attribute',
									'woocommerce'
								),
								onClick: () =>
									setAttributes( { editMode: ! editMode } ),
								isActive: editMode,
							},
						] }
					/>
				</BlockControls>
				{ this.getInspectorControls() }
				{ editMode ? (
					this.renderEditMode()
				) : (
					<Disabled>
						<ServerSideRender
							block={ name }
							attributes={ attributes }
						/>
					</Disabled>
				) }
			</>
		);
	}
}

ProductsByAttributeBlock.propTypes = {
	/**
	 * The attributes for this block
	 */
	attributes: PropTypes.object.isRequired,
	/**
	 * The register block name.
	 */
	name: PropTypes.string.isRequired,
	/**
	 * A callback to update attributes
	 */
	setAttributes: PropTypes.func.isRequired,
	// from withSpokenMessages
	debouncedSpeak: PropTypes.func.isRequired,
};

export default withSpokenMessages( ProductsByAttributeBlock );
