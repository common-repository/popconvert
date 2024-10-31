<?php
/**
 * @package Popconvert
 * @version 1.0.3
 */
/*
  Plugin Name: Popconvert
  Plugin URI: http://wordpress.org/plugins/popconvert
  Description: Generate leads and Increase your Convertion rate. Turn your visitors into leads through the most effective conversion stragety in the market.
  Author: Popconvert
  Version: 1.0.3
*/

function enqueue_popconvert_js() {
    wp_enqueue_script('custom', 'https://cdn.popconvert.com.br/widget/popconvert.js');
}

add_action('wp_enqueue_scripts', 'enqueue_popconvert_js');
