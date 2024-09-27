<?php
class Virtual_Chatbot_Enqueue {
    public static function enqueue_assets() {
        wp_enqueue_style('chatbot-slickcarousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css');
        wp_enqueue_style('chatbot-slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
        wp_enqueue_style('chatbot-style', plugin_dir_url('virtual-chat') . 'virtual-chat/assets/css/style.css');
        
        wp_enqueue_script('chatbot-slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], '1.8.1', true);
        wp_enqueue_script('chatbot-script', plugin_dir_url('virtual-chat') . 'virtual-chat/assets/js/script.js', ['jquery'], null, true);

        wp_localize_script('chatbot-script', 'chatbot_ajax', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('chatbot_nonce')
        ]);
    }
}
