<?php
/*
Plugin Name: Virtual Chatbot
Description: A virtual chatbot plugin for WordPress.
Version: 0.0.5
Author: Muhammad Shoaib Zain
*/

// Include necessary files
include_once plugin_dir_path(__FILE__) . 'includes/class-virtual-chatbot-shortcode.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-virtual-chatbot-enqueue.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-virtual-chatbot-handler.php';
include_once plugin_dir_path(__FILE__) . 'includes/class-virtual-chatbot-db.php';
include_once plugin_dir_path(__FILE__) . 'includes/admin/class-virtual-chatbot-admin.php';
include_once plugin_dir_path(__FILE__) . 'includes/admin/class-virtual-chatbot-admin-enqueue.php';

// Initialize the plugin
function virtual_chatbot_init() {
    // Initialize the shortcode class
    $chatbot_shortcode = new Virtual_Chatbot_Shortcode();
    // Initialize the enqueue class
    add_action('wp_enqueue_scripts', array('Virtual_Chatbot_Enqueue', 'enqueue_assets'));

    // Initialize the admin enqueue class
    add_action('admin_enqueue_scripts', array('Virtual_Chatbot_Admin_Enqueue', 'admin_enqueue_assets'));
    // Initialize the admin class
    new Virtual_Chatbot_Admin();
}
add_action('plugins_loaded', 'virtual_chatbot_init');

// Ensure the database is set up correctly on plugin activation
register_activation_hook(__FILE__, array('Virtual_Chatbot_DB', 'install'));

