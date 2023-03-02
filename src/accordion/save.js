import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

/**
 * Save component.
 * See https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-edit-save/#save
 *
 * @param {Object} props The block props.
 * @return {Function} Render the edit screen
 */
const Save = () => {
    const blockProps = useBlockProps.save();
 
    return (
        <InnerBlocks.Content { ...blockProps }/>
    );
};
export default Save;
