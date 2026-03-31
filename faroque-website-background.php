<?php

/**
 * Plugin name: Faroque Website Background
 * Plugin URI: https://github.com/safaroque7/faroque-website-background
 * Description: It is a plugin where you can change background color of your website.
 * Version: 1.0.0
 * Author: S A Faroque
 * Author URI: https://webnewsdesign.com
 * Text Domain: faroque-website-background
 */

//Exit if accessed deirectly
if (!defined('ABSPATH')) exit;

//Include Functions 
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

//Enqueue CSS & JS
function fwb_enqueue_assets()
{
    wp_enqueue_style('fwb_style', plugin_dir_url(__FILE__) . 'assets/css/style.css', [], '1.0.0');
    wp_enqueue_script('fwb_script', plugin_dir_url(__FILE__) . 'assets/js/script.js', ['query'], true);
}
add_action('wp_enqueue_scripts', 'fwb_enqueue_assets');
