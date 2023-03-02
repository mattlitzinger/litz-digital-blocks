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

// Set vars
$block_slug = str_replace('litz-digital/', '', $block->name);
$block_id = uniqid($block_slug . '-');

$allowed_html = array(
	'br'     => array(),
	'p'      => array(),
	'strong' => array(),
	'em' => array(),
);

$block_html = '<div class="accordion ';
	if ( isset( $attributes['className'] ) ) : 
		$block_html .= esc_attr( $attributes['className'] );
	endif; 
$block_html .= '" id="' . $block_id . '">';
	
	$block_html .= $content;

$block_html .= '</div>';

return $block_html;

