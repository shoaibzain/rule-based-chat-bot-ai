<?php
class Virtual_Chatbot_Admin_Enqueue {
    public static function admin_enqueue_assets() {
        wp_enqueue_style('chatbot-dataTables', 'https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css');
        wp_enqueue_script('chatbot-dataTables', 'https://cdn.datatables.net/2.1.3/js/dataTables.js', ['jquery'], null, true);
        wp_enqueue_script('chatbot-admin', plugin_dir_url(__FILE__) . '../../assets/js/admin.js', ['jquery'], null, true);
    }
}
