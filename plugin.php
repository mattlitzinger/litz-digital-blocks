<?php
/**
 * Plugin Name:       Litz Digital Blocks
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Litz Digital
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       litz-digital-blocks
 *
 * @package           litz-digital-blocks
 */

/* 
 * Starter repo: https://github.com/helen/wcus-2021
 */

define('LITZ_DIGITAL_BLOCKS_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('LITZ_DIGITAL_BLOCKS_PLUGIN_URI', plugin_dir_url(__FILE__));

// require_once LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . 'blocks/accordion/register.php';
// require_once LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . 'blocks/accordion-item/register.php';

function litz_digital_blocks_block_init() {

  $blocks = array(
    'accordion',
    'accordion-item'
  );

  foreach( $blocks as $block ) {
    register_block_type( __DIR__ . '/build/' . $block );
  }
}
add_action( 'init', 'litz_digital_blocks_block_init' );

// function litz_digital_blocks_dynamic_blocks_init() {

//   $dynamic_blocks = array(
//     'days-away',
//   );

//   foreach ( $dynamic_blocks as $block ) {
//     $block_snake_case = str_replace( '-', '_', $block );
//     $file_url = __DIR__ . "/src/${block}/${block_snake_case}.php";
//     if ( !file_exists( $file_url ) ) {
//       continue;
//     }
//     include( $file_url );
//     register_block_type( __DIR__ .'/build/' . $block,
//     array(
//       'render_callback' => 'rb_render_dynamic_block_' . $block_snake_case
//     ));
//   }
// }
// add_action( 'init', 'litz_digital_blocks_dynamic_blocks_init' );

// function litz_digital_blocks_enqueue_block_shared_scripts() {

//   $script = wp_register_script(
//     'rb-collapsible',
//     plugin_dir_url(__DIR__) . 'rb-snaplogic-blocks/src/shared/collapsible.js',
//     array(),
//     filemtime( plugin_dir_path( __DIR__ . '/src/shared/collapsible.js' ) ),
//     true
//   );

// }
// add_action( 'wp_enqueue_scripts', 'litz_digital_blocks_enqueue_block_shared_scripts' );

