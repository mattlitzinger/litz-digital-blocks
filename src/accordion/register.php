<?php

function litz_digital_register_accordion_block(){

	wp_register_script(
  	'litz-digital-accordion', 
  	LITZ_DIGITAL_BLOCKS_PLUGIN_URI . 'blocks/accordion/view.js', 
  	array(), 
  	filemtime( LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . 'blocks/accordion/view.js' ), 
  	true
  );

	register_block_type(
		__DIR__,
		array(
			'api_version' 		=> 2,
			'render_callback' => 'litz_digital_render_accordion_block_callback',
			'script'          => 'litz-digital-accordion',
		)
	);

	function litz_digital_render_accordion_block_callback( $attributes, $content, $block ) {

		// convert name ("litz-digital/accordion") into path friendly slug ("accordion")
		$slug = str_replace('litz-digital/', '', $block->name);
		
		// include a template part from within the "template-parts/blocks" folder
		if( file_exists( LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . "blocks/{$slug}/render.php" ) ) {
			$block_html = require( LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . "blocks/{$slug}/render.php" );
			return $block_html;
		}
	}
}
add_action( 'init', 'litz_digital_register_accordion_block' );
