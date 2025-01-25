<?php
/**
 * Plugin Name: Event Management API
 * Description: Simple CRUD API for managing events.
 * Version: 1.0
 * Author: Sonali Prajapati
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include core functionality.
require_once plugin_dir_path( __FILE__ ) . 'includes/basic-auth.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-event-cpt.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-rest-api.php';

// Initialize the plugin.
function ema_initialize_plugin() {
    Event_CPT::register();
    Rest_API::register_routes();
}
add_action( 'init', 'ema_initialize_plugin' );
