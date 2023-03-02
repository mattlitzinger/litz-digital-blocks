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
        className: 'accordion-item',
    });

    const {
        heading,
        content
    } = attributes;

    const ALLOWED_BLOCKS = [ 
        'core/heading', 
        'core/paragraph',
        'core/list',
        'core/quote',
        'core/buttons', 
        'core/image',
        'core/html', 
        'core/code', 
        'core/shortcode',
        'core/embed',
        'core/video'
    ];

	return (
        <div {...blockProps}>
            <div class="accordion-item--inner">
                <h3 className="accordion-item--title">
                    <button aria-controls="myID-1" aria-expanded="false">
                		<RichText
                            tagName="span"
                            value={ heading }
                            onChange={ (value) => setAttributes( { heading: value } ) }
                            placeholder="Accordion Title"
                            allowedFormats={[]}
                        />
                    </button>
                </h3>
                <div className="accordion-item--desc">
                    <InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
                </div>
            </div>
        </div>
	);
};
export default Edit;
