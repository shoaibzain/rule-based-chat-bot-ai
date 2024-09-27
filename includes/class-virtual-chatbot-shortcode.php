<?php

class Virtual_Chatbot_Shortcode {

    public function __construct() {
        // Register the shortcode
        add_shortcode('virtual_chatbot', array($this, 'render_shortcode'));
    }

    public function render_shortcode($atts) {
        // Define default attributes
        $atts = shortcode_atts(
            array(
                'layout' => 'default', // Default layout option
            ),
            $atts,
            'virtual_chatbot'
        );

        // Start output buffering
        ob_start();

        // Include the template file based on the layout attribute
        $template_file = plugin_dir_path(__FILE__) . '../templates/chat-session-form-' . $atts['layout'] . '.php';
        if (file_exists($template_file)) {
            include $template_file;
        } else {
            // Fallback to default template if the specific layout file is not found
            include plugin_dir_path(__FILE__) . '../templates/chat-session-form-default.php';
        }

        // Return the buffered content
        return ob_get_clean();
    }
}
