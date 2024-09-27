<?php 
add_action('wp_ajax_chatbot_send_message', 'handle_chatbot_message');
add_action('wp_ajax_nopriv_chatbot_send_message', 'handle_chatbot_message');

function handle_chatbot_message() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'chatbot_nonce')) {
        wp_send_json_error('Invalid nonce');
        wp_die();
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'virtual_chatbot';

    // Get user info
    $user_id = get_current_user_id();
    if (!$user_id) {
        $user_id = 0; // Non-logged-in users
    }

    // Process the message
    $message = sanitize_text_field($_POST['message']);
    $session_id = sanitize_text_field($_POST['session_id']); // Get session ID from request

    // Insert message into the database
    $wpdb->insert(
        $table_name,
        array(
            'session_id' => $session_id,
            'user_id'    => $user_id,
            'message'    => $message,
            'created_at' => current_time('mysql'), // Set the current timestamp
        ),
        array(
            '%s',
            '%d',
            '%s',
            '%s',
        )
    );

    wp_send_json_success('Message received: ' . $message);

    wp_die();
}

// In chatbot-handler.php
add_action('wp_ajax_chatbot_get_questions', 'handle_get_questions');
add_action('wp_ajax_nopriv_chatbot_get_questions', 'handle_get_questions');

function handle_get_questions() {
    $questions = include(plugin_dir_path(__FILE__) . '../includes/questions.php');
    wp_send_json_success($questions);
    wp_die();
}
