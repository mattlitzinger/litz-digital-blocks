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
 */

/* 
 * Starter repo: https://github.com/helen/wcus-2021
 */

define('LITZ_DIGITAL_BLOCKS_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('LITZ_DIGITAL_BLOCKS_PLUGIN_URI', plugin_dir_url(__FILE__));

require_once LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . 'blocks/accordion/register.php';
require_once LITZ_DIGITAL_BLOCKS_PLUGIN_PATH . 'blocks/accordion-item/register.php';

