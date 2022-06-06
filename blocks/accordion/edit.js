import { __ } from '@wordpress/i18n';
import { InnerBlocks, RichText, useBlockProps } from '@wordpress/block-editor';

/**
 * Edit component.
 * See https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-edit-save/#edit
 *
 * @param {Object} props The block props.
 * @return {Function} Render the edit screen
 */
const Edit = ( { isSelected, attributes, setAttributes } ) => {
    const blockProps = useBlockProps( {
        className: 'accordion',
    });

    const ALLOWED_BLOCKS = [ 'litz-digital/accordion-item' ];

	return (
        <div {...blockProps}>
            <InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
        </div>
	);
};
export default Edit;
