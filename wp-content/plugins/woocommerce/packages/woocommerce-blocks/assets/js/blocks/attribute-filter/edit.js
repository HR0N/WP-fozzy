/**
 * External dependencies
 */
import { __, sprintf, _n } from '@wordpress/i18n';
import { useState } from '@wordpress/element';
import {
	InspectorControls,
	BlockControls,
	useBlockProps,
} from '@wordpress/block-editor';
import { Icon, category, external } from '@wordpress/icons';
import { SearchListControl } from '@woocommerce/editor-components/search-list-control';
import { mapValues, toArray, sortBy } from 'lodash';
import { getAdminLink, getSetting } from '@woocommerce/settings';
import HeadingToolbar from '@woocommerce/editor-components/heading-toolbar';
import BlockTitle from '@woocommerce/editor-components/block-title';
import classnames from 'classnames';
import {
	Placeholder,
	Disabled,
	PanelBody,
	ToggleControl,
	Button,
	ToolbarGroup,
	withSpokenMessages,
	// eslint-disable-next-line @wordpress/no-unsafe-wp-apis
	__experimentalToggleGroupControl as ToggleGroupControl,
	// eslint-disable-next-line @wordpress/no-unsafe-wp-apis
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from '@wordpress/components';

/**
 * Internal dependencies
 */
import Block from './block.js';
import './editor.scss';

const ATTRIBUTES = getSetting( 'attributes', [] );

const Edit = ( { attributes, setAttributes, debouncedSpeak } ) => {
	const {
		attributeId,
		className,
		displayStyle,
		heading,
		headingLevel,
		isPreview,
		queryType,
		showCounts,
		showFilterButton,
	} = attributes;

	const [ isEditing, setIsEditing ] = useState(
		! attributeId && ! isPreview
	);

	const blockProps = useBlockProps();

	const getBlockControls = () => {
		return (
			<BlockControls>
				<ToolbarGroup
					controls={ [
						{
							icon: 'edit',
							title: __( 'Edit', 'woocommerce' ),
							onClick: () => setIsEditing( ! isEditing ),
							isActive: isEditing,
						},
					] }
				/>
			</BlockControls>
		);
	};

	const getInspectorControls = () => {
		return (
			<InspectorControls key="inspector">
				<PanelBody
					title={ __( 'Content', 'woocommerce' ) }
				>
					<ToggleControl
						label={ __(
							'Product count',
							'woocommerce'
						) }
						help={
							showCounts
								? __(
										'Product count is visible.',
										'woocommerce'
								  )
								: __(
										'Product count is hidden.',
										'woocommerce'
								  )
						}
						checked={ showCounts }
						onChange={ () =>
							setAttributes( {
								showCounts: ! showCounts,
							} )
						}
					/>
					<p>
						{ __(
							'Heading Level',
							'woocommerce'
						) }
					</p>
					<HeadingToolbar
						isCollapsed={ false }
						minLevel={ 2 }
						maxLevel={ 7 }
						selectedLevel={ headingLevel }
						onChange={ ( newLevel ) =>
							setAttributes( { headingLevel: newLevel } )
						}
					/>
				</PanelBody>
				<PanelBody
					title={ __(
						'Block Settings',
						'woocommerce'
					) }
				>
					<ToggleGroupControl
						label={ __(
							'Query Type',
							'woocommerce'
						) }
						help={
							queryType === 'and'
								? __(
										'Products that have all of the selected attributes will be shown.',
										'woocommerce'
								  )
								: __(
										'Products that have any of the selected attributes will be shown.',
										'woocommerce'
								  )
						}
						value={ queryType }
						onChange={ ( value ) =>
							setAttributes( {
								queryType: value,
							} )
						}
					>
						<ToggleGroupControlOption
							value="and"
							label={ __(
								'And',
								'woocommerce'
							) }
						/>
						<ToggleGroupControlOption
							value="or"
							label={ __( 'Or', 'woocommerce' ) }
						/>
					</ToggleGroupControl>
					<ToggleGroupControl
						label={ __(
							'Display Style',
							'woocommerce'
						) }
						value={ displayStyle }
						onChange={ ( value ) =>
							setAttributes( {
								displayStyle: value,
							} )
						}
					>
						<ToggleGroupControlOption
							value="list"
							label={ __(
								'List',
								'woocommerce'
							) }
						/>
						<ToggleGroupControlOption
							value="dropdown"
							label={ __(
								'Dropdown',
								'woocommerce'
							) }
						/>
					</ToggleGroupControl>
					<ToggleControl
						label={ __(
							'Filter button',
							'woocommerce'
						) }
						help={
							showFilterButton
								? __(
										'Products will only update when the button is pressed.',
										'woocommerce'
								  )
								: __(
										'Products will update as options are selected.',
										'woocommerce'
								  )
						}
						checked={ showFilterButton }
						onChange={ ( value ) =>
							setAttributes( {
								showFilterButton: value,
							} )
						}
					/>
				</PanelBody>
				<PanelBody
					title={ __(
						'Filter Products by Attribute',
						'woocommerce'
					) }
					initialOpen={ false }
				>
					{ renderAttributeControl( { isCompact: true } ) }
				</PanelBody>
			</InspectorControls>
		);
	};

	const noAttributesPlaceholder = () => (
		<Placeholder
			className="wc-block-attribute-filter"
			icon={ <Icon icon={ category } /> }
			label={ __(
				'Filter Products by Attribute',
				'woocommerce'
			) }
			instructions={ __(
				'Display a list of filters based on a chosen attribute.',
				'woocommerce'
			) }
		>
			<p>
				{ __(
					"Attributes are needed for filtering your products. You haven't created any attributes yet.",
					'woocommerce'
				) }
			</p>
			<Button
				className="wc-block-attribute-filter__add-attribute-button"
				isSecondary
				href={ getAdminLink(
					'edit.php?post_type=product&page=product_attributes'
				) }
			>
				{ __( 'Add new attribute', 'woocommerce' ) +
					' ' }
				<Icon icon={ external } />
			</Button>
			<Button
				className="wc-block-attribute-filter__read_more_button"
				isTertiary
				href="https://docs.woocommerce.com/document/managing-product-taxonomies/"
			>
				{ __( 'Learn more', 'woocommerce' ) }
			</Button>
		</Placeholder>
	);

	const onDone = () => {
		setIsEditing( false );
		debouncedSpeak(
			__(
				'Showing Filter Products by Attribute block preview.',
				'woocommerce'
			)
		);
	};

	const onChange = ( selected ) => {
		if ( ! selected || ! selected.length ) {
			return;
		}

		const selectedId = selected[ 0 ].id;
		const productAttribute = ATTRIBUTES.find(
			( attribute ) => attribute.attribute_id === selectedId.toString()
		);

		if ( ! productAttribute || attributeId === selectedId ) {
			return;
		}

		const attributeName = productAttribute.attribute_label;

		setAttributes( {
			attributeId: selectedId,
			heading: sprintf(
				/* translators: %s attribute name. */
				__( 'Filter by %s', 'woocommerce' ),
				attributeName
			),
		} );
	};

	const renderAttributeControl = ( { isCompact } ) => {
		const messages = {
			clear: __(
				'Clear selected attribute',
				'woocommerce'
			),
			list: __( 'Product Attributes', 'woocommerce' ),
			noItems: __(
				"Your store doesn't have any product attributes.",
				'woocommerce'
			),
			search: __(
				'Search for a product attribute:',
				'woocommerce'
			),
			selected: ( n ) =>
				sprintf(
					/* translators: %d is the number of attributes selected. */
					_n(
						'%d attribute selected',
						'%d attributes selected',
						n,
						'woocommerce'
					),
					n
				),
			updated: __(
				'Product attribute search results updated.',
				'woocommerce'
			),
		};

		const list = sortBy(
			toArray(
				mapValues( ATTRIBUTES, ( item ) => {
					return {
						id: parseInt( item.attribute_id, 10 ),
						name: item.attribute_label,
					};
				} )
			),
			'name'
		);

		return (
			<SearchListControl
				className="woocommerce-product-attributes"
				list={ list }
				selected={ list.filter( ( { id } ) => id === attributeId ) }
				onChange={ onChange }
				messages={ messages }
				isSingle
				isCompact={ isCompact }
			/>
		);
	};

	const renderEditMode = () => {
		return (
			<Placeholder
				className="wc-block-attribute-filter"
				icon={ <Icon icon={ category } /> }
				label={ __(
					'Filter Products by Attribute',
					'woocommerce'
				) }
				instructions={ __(
					'Display a list of filters based on a chosen attribute.',
					'woocommerce'
				) }
			>
				<div className="wc-block-attribute-filter__selection">
					{ renderAttributeControl( { isCompact: false } ) }
					<Button isPrimary onClick={ onDone }>
						{ __( 'Done', 'woocommerce' ) }
					</Button>
				</div>
			</Placeholder>
		);
	};

	return Object.keys( ATTRIBUTES ).length === 0 ? (
		noAttributesPlaceholder()
	) : (
		<div { ...blockProps }>
			{ getBlockControls() }
			{ getInspectorControls() }
			{ isEditing ? (
				renderEditMode()
			) : (
				<div
					className={ classnames(
						className,
						'wc-block-attribute-filter'
					) }
				>
					<BlockTitle
						className="wc-block-attribute-filter__title"
						headingLevel={ headingLevel }
						heading={ heading }
						onChange={ ( value ) =>
							setAttributes( { heading: value } )
						}
					/>
					<Disabled>
						<Block attributes={ attributes } isEditor />
					</Disabled>
				</div>
			) }
		</div>
	);
};

export default withSpokenMessages( Edit );
