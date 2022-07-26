/* tslint:disable */
/**
 * External dependencies
 */
import classnames from 'classnames';
import { __ } from '@wordpress/i18n';
import { CartCheckoutFeedbackPrompt } from '@woocommerce/editor-components/feedback-prompt';
import {
	useBlockProps,
	InnerBlocks,
	InspectorControls,
	BlockControls,
} from '@wordpress/block-editor';
import { PanelBody, ToggleControl, Notice } from '@wordpress/components';
import { CartCheckoutCompatibilityNotice } from '@woocommerce/editor-components/compatibility-notices';
import { CART_PAGE_ID } from '@woocommerce/block-settings';
import BlockErrorBoundary from '@woocommerce/base-components/block-error-boundary';
import {
	EditorProvider,
	useEditorContext,
	CartProvider,
} from '@woocommerce/base-context';
import { createInterpolateElement } from '@wordpress/element';
import { getAdminLink } from '@woocommerce/settings';
import { previewCart } from '@woocommerce/resource-previews';
import { filledCart, removeCart } from '@woocommerce/icons';
import { Icon } from '@wordpress/icons';

/**
 * Internal dependencies
 */
import './inner-blocks';
import './editor.scss';
import {
	addClassToBody,
	useViewSwitcher,
	useBlockPropsWithLocking,
	useForcedLayout,
} from '../cart-checkout-shared';
import { CartBlockContext } from './context';

// This is adds a class to body to signal if the selected block is locked
addClassToBody();

// Array of allowed block names.
const ALLOWED_BLOCKS = [
	'woocommerce/filled-cart-block',
	'woocommerce/empty-cart-block',
];

const views = [
	{
		view: 'woocommerce/filled-cart-block',
		label: __( 'Filled Cart', 'woocommerce' ),
		icon: <Icon icon={ filledCart } />,
	},
	{
		view: 'woocommerce/empty-cart-block',
		label: __( 'Empty Cart', 'woocommerce' ),
		icon: <Icon icon={ removeCart } />,
	},
];

const BlockSettings = ( { attributes, setAttributes } ) => {
	const { hasDarkControls } = attributes;
	const { currentPostId } = useEditorContext();
	return (
		<InspectorControls>
			{ currentPostId !== CART_PAGE_ID && (
				<Notice
					className="wc-block-cart__page-notice"
					isDismissible={ false }
					status="warning"
				>
					{ createInterpolateElement(
						__(
							'If you would like to use this block as your default cart you must update your <a>page settings in WooCommerce</a>.',
							'woocommerce'
						),
						{
							a: (
								// eslint-disable-next-line jsx-a11y/anchor-has-content
								<a
									href={ getAdminLink(
										'admin.php?page=wc-settings&tab=advanced'
									) }
									target="_blank"
									rel="noopener noreferrer"
								/>
							),
						}
					) }
				</Notice>
			) }
			<PanelBody title={ __( 'Style', 'woocommerce' ) }>
				<ToggleControl
					label={ __(
						'Dark mode inputs',
						'woocommerce'
					) }
					help={ __(
						'Inputs styled specifically for use on dark background colors.',
						'woocommerce'
					) }
					checked={ hasDarkControls }
					onChange={ () =>
						setAttributes( {
							hasDarkControls: ! hasDarkControls,
						} )
					}
				/>
			</PanelBody>
			<CartCheckoutFeedbackPrompt />
		</InspectorControls>
	);
};

export const Edit = ( { className, attributes, setAttributes, clientId } ) => {
	const { hasDarkControls } = attributes;
	const { currentView, component: ViewSwitcherComponent } = useViewSwitcher(
		clientId,
		views
	);
	const defaultTemplate = [
		[ 'woocommerce/filled-cart-block', {}, [] ],
		[ 'woocommerce/empty-cart-block', {}, [] ],
	];
	const blockProps = useBlockPropsWithLocking( {
		className: classnames( className, 'wp-block-woocommerce-cart', {
			'is-editor-preview': attributes.isPreview,
		} ),
	} );
	useForcedLayout( {
		clientId,
		registeredBlocks: ALLOWED_BLOCKS,
		defaultTemplate,
	} );
	return (
		<div { ...blockProps }>
			<BlockErrorBoundary
				header={ __(
					'Cart Block Error',
					'woocommerce'
				) }
				text={ __(
					'There was an error whilst rendering the cart block. If this problem continues, try re-creating the block.',
					'woocommerce'
				) }
				showErrorMessage={ true }
				errorMessagePrefix={ __(
					'Error message:',
					'woocommerce'
				) }
			>
				<EditorProvider
					currentView={ currentView }
					previewData={ { previewCart } }
				>
					<BlockSettings
						attributes={ attributes }
						setAttributes={ setAttributes }
					/>
					<BlockControls __experimentalShareWithChildBlocks>
						{ ViewSwitcherComponent }
					</BlockControls>
					<CartBlockContext.Provider
						value={ {
							hasDarkControls,
						} }
					>
						<CartProvider>
							<InnerBlocks
								allowedBlocks={ ALLOWED_BLOCKS }
								template={ defaultTemplate }
								templateLock={ false }
							/>
						</CartProvider>
					</CartBlockContext.Provider>
				</EditorProvider>
			</BlockErrorBoundary>
			<CartCheckoutCompatibilityNotice blockName="cart" />
		</div>
	);
};

export const Save = () => {
	return (
		<div
			{ ...useBlockProps.save( {
				className: 'is-loading',
			} ) }
		>
			<InnerBlocks.Content />
		</div>
	);
};
