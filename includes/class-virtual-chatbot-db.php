<?php

class Virtual_Chatbot_DB {

    public static function install() {
        global $wpdb;

        $table_name = $wpdb->prefix . 'virtual_chatbot';

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            session_id VARCHAR(255) NOT NULL,
            user_id BIGINT(20) UNSIGNED DEFAULT 0,
            message TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('Read', 'Unread') DEFAULT 'Unread'
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }
}
