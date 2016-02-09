<?php

/**
 * Plugin Name: Gogodigital Cookie Consent
 * Plugin URI: http://www.gogodigital.it
 * Description: Adding Cookie Consent script to a Wordpress site
 * Author: Gogodigital S.r.l.s.
 * Version: 1.0.0
 * Author URI: http://www.gogodigital.it
 */

/**
 * Adding Cookie Consent js
 */
 
add_action( 'wp_enqueue_scripts', 'add_cookieconsent' );

function add_cookieconsent() 
{
	wp_enqueue_script( 'cookieconsent2-js', wp_gogo_cookieconsent_get_plugin_url(). '/js/cookieconsent.min.js', array(), '1.0.10', true );
	wp_enqueue_script( 'cookieconsent2-custom-js', wp_gogo_cookieconsent_get_plugin_url(). '/js/cookieconsent.custom.js', array(), '1.0.0', true );
}

/**
 * Get Plugin URL
 * @return string
 */
function wp_gogo_cookieconsent_get_plugin_url() 
{
    if ( !function_exists('plugins_url') )

        return get_option('siteurl') . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__));

    return plugins_url(plugin_basename(dirname(__FILE__)));
}

?>