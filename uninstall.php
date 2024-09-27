<?php
// Ensure this file is being called by WordPress during uninstallation
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Get the global WordPress database object
global $wpdb;

// Define the table name
$table_name = $wpdb->prefix . 'virtual_chatbot';

// Drop the table if it exists
$wpdb->query("DROP TABLE IF EXISTS $table_name");
