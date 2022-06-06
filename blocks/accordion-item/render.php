<?php
/**
 * @var array $args {
 *     $args is provided by get_template_call.
 *
 *     @type array $attributes Block attributes.
 *     @type array $content    Block content.
 *     @type array $block      Block instance.
 * }
 */

// Bail early if no heading.
if ( empty( $attributes['heading'] ) ) {
	return;
}

// Set vars
$block_slug = str_replace('litz-digital/', '', $block->name);
$block_id = uniqid($block_slug . '-');

$allowed_html = array(
	'br'     => array(),
	'p'      => array(),
	'strong' => array(),
	'em' => array(),
);

$block_html = '<div class="accordion-item ';
	if ( isset( $attributes['className'] ) ) : 
		$block_html .= esc_attr( $attributes['className'] );
	endif; 
$block_html .= '">';
	$block_html .= '<div class="accordion-item--inner">';

		if ( ! empty( $attributes['heading'] ) ) :
			$block_html .= '<h3 class="accordion-item--title">';
				$block_html .= '<button aria-controls="' . $block_id . '" aria-expanded="false">';
					$block_html .= '<span>' . esc_html( $attributes['heading'] ) . '</span>';
				$block_html .= '</button>';
			$block_html .= '</h3>';
		endif; 

		// if ( ! empty( $attributes['content'] ) ) : 
			$block_html .= '<div class="accordion-item--desc" id="' . $block_id . '" hidden>';

				// $block_html .= '<p>' . wp_kses( $attributes['content'], $allowed_html ) . '</p>';
			$block_html .= $content;

			$block_html .= '</div>';
		// endif; 

	$block_html .= '</div>';
$block_html .= '</div>';

return $block_html;

