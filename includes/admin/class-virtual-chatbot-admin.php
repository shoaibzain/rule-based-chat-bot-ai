<?php

class Virtual_Chatbot_Admin {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'handle_admin_actions'));
    }

    // Add the admin menu page
    public function add_admin_menu() {
        add_menu_page(
            'Virtual Chatbot',
            'Chatbot',
            'manage_options',
            'virtual-chatbot',
            array($this, 'render_admin_page'),
            'dashicons-admin-comments',
            20
        );
    }

    // Handle admin actions such as message deletion and status updates
    public function handle_admin_actions() {
        if (isset($_GET['page']) && $_GET['page'] === 'virtual-chatbot') {
            global $wpdb;
            $table_name = $wpdb->prefix . 'virtual_chatbot';

            // Delete all messages for a specific session
            if (isset($_GET['delete_all']) && isset($_GET['session_id']) && check_admin_referer('delete_chatbot_message', 'delete_nonce')) {
                $session_id = sanitize_text_field($_GET['session_id']);
                $wpdb->delete($table_name, array('session_id' => $session_id), array('%s'));
                wp_redirect(add_query_arg(array('page' => 'virtual-chatbot', 'deleted' => 'true'), admin_url('admin.php')));
                exit;
            }

            // Update status for all messages in a specific session
            if (isset($_GET['update_status']) && isset($_GET['session_id']) && isset($_GET['status']) && check_admin_referer('update_chatbot_status', 'status_nonce')) {
                $session_id = sanitize_text_field($_GET['session_id']);
                $status = sanitize_text_field($_GET['status']);
                $wpdb->update(
                    $table_name,
                    array('status' => $status),
                    array('session_id' => $session_id),
                    array('%s'),
                    array('%s')
                );
                wp_redirect(add_query_arg(array('page' => 'virtual-chatbot', 'status_updated' => 'true'), admin_url('admin.php')));
                exit;
            }
        }
    }

    // Render the admin page
    public function render_admin_page() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'virtual_chatbot';

        if (isset($_GET['session_id'])) {
            return $this->render_admin_details_page();
        }

        $sessions = $wpdb->get_results("
            SELECT session_id, MIN(id) AS id, MIN(created_at) AS created_at, MIN(status) AS status
            FROM $table_name
            GROUP BY session_id
            ORDER BY created_at DESC
        ");

        ?>
<div class="wrap">
    <h1>Chatbot Messages</h1>
    <?php if (isset($_GET['deleted']) && $_GET['deleted'] === 'true') : ?>
    <div class="notice notice-success is-dismissible">
        <p>Message deleted successfully.</p>
    </div>
    <?php endif; ?>
    <?php if (isset($_GET['status_updated']) && $_GET['status_updated'] === 'true') : ?>
    <div class="notice notice-success is-dismissible">
        <p>Status updated successfully.</p>
    </div>
    <?php endif; ?>
    <table class="wp-list-vchatbot wp-list-table widefat fixed striped">
        <thead>
            <tr>
                <th>Session ID</th>
                <th>Status</th>
                <th>Details</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($sessions)) : ?>
            <tr>
                <td colspan="5">No Messages</td>
            </tr>
            <?php else: ?>
            <?php foreach ($sessions as $session) : ?>
            <tr>
                <td><?php echo esc_html($session->session_id); ?></td>
                <td><?php echo esc_html($session->status); ?></td>
                <td><a href="<?php echo esc_url(add_query_arg(array('page' => 'virtual-chatbot', 'session_id' => $session->session_id), admin_url('admin.php'))); ?>">View Details</a></td>
                <td><?php echo esc_html($session->created_at); ?></td>
                <td>
                    <a href="<?php echo esc_url(wp_nonce_url(add_query_arg(array('page' => 'virtual-chatbot', 'delete_all' => 'true', 'session_id' => $session->session_id), admin_url('admin.php')), 'delete_chatbot_message', 'delete_nonce')); ?>" class="button button-secondary">Delete All</a>
                    <a href="<?php echo esc_url(wp_nonce_url(add_query_arg(array('page' => 'virtual-chatbot', 'update_status' => 'true', 'session_id' => $session->session_id, 'status' => 'Unread'), admin_url('admin.php')), 'update_chatbot_status', 'status_nonce')); ?>" class="button button-secondary">Mark as Unread</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php
    }

    // Render the details page for a specific session
    public function render_admin_details_page() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'virtual_chatbot';

        if (isset($_GET['session_id'])) {
            $session_id = sanitize_text_field($_GET['session_id']);
            $messages = $wpdb->get_results($wpdb->prepare("
                SELECT * FROM $table_name
                WHERE session_id = %s
                ORDER BY created_at DESC
            ", $session_id));

            // Update status to 'Read'
            $wpdb->update(
                $table_name,
                array('status' => 'Read'),
                array('session_id' => $session_id),
                array('%s'),
                array('%s')
            );

            ?>
<div class="wrap">
    <h1>Chatbot Session Details</h1>
    <a href="<?php echo esc_url(admin_url('admin.php?page=virtual-chatbot')); ?>" class="button button-secondary">Back to Overview</a>
    <table class="wp-list-vchatbot wp-list-table widefat fixed striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Session ID</th>
                <th>User ID</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message) : ?>
            <tr>
                <td><?php echo esc_html($message->id); ?></td>
                <td><?php echo esc_html($message->session_id); ?></td>
                <td><?php echo esc_html($message->user_id); ?></td>
                <td><?php echo esc_html($message->message); ?></td>
                <td><?php echo esc_html($message->created_at); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
        } else {
            echo '<div class="notice notice-error"><p>No session ID specified.</p></div>';
        }
    }
}
?>
