<?php
/**
 * Plugin Name: WP Script Tailwind
 * Description: A boilerplate WordPress plugin demonstrating how to use TailwindCSS with wp-scripts.
 * Version: 1.0.0
 * Author: Sapayth H.
 * Author URI: https://sapayth.com
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Define plugin constants
 */
define( 'WP_SCRIPT_TAILWIND_VERSION', '1.0.0' );
define( 'WP_SCRIPT_TAILWIND_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_SCRIPT_TAILWIND_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Initialize the plugin
 */
function wp_script_tailwind_init() {
    // Add admin menu
    add_action('admin_menu', 'wp_script_tailwind_admin_menu');
}
add_action( 'plugins_loaded', 'wp_script_tailwind_init' );

/**
 * Register admin menu
 */
function wp_script_tailwind_admin_menu() {
    add_menu_page(
        'WP Script Tailwind', // Page title
        'WP Script Tailwind', // Menu title
        'manage_options',     // Capability
        'wp-script-tailwind', // Menu slug
        'wp_script_tailwind_admin_page', // Callback function
        'dashicons-admin-customizer', // Icon
        100 // Position
    );
}

/**
 * Admin page callback
 */
function wp_script_tailwind_admin_page() {
    ?>
    <div id="wp-script-tailwind-admin-app" class="p-6 bg-gray-50"></div>
    <?php
}

/**
 * Enqueue admin scripts and styles
 */
function wp_script_tailwind_admin_enqueue_scripts($hook) {
    // Only load on our plugin admin page
    if ($hook !== 'toplevel_page_wp-script-tailwind') {
        return;
    }

    // Enqueue admin script
    wp_enqueue_script(
        'wp-script-tailwind-admin-script',
        WP_SCRIPT_TAILWIND_PLUGIN_URL . 'assets/admin.js',
        [ 'react-jsx-runtime', 'wp-element' ],
        WP_SCRIPT_TAILWIND_VERSION,
        true // Load in footer
    );

    // Enqueue admin stylesheet with Tailwind styles
    wp_enqueue_style(
        'wp-script-tailwind-admin-style',
        WP_SCRIPT_TAILWIND_PLUGIN_URL . 'assets/admin.css',
        [],
        WP_SCRIPT_TAILWIND_VERSION
    );
}
add_action('admin_enqueue_scripts', 'wp_script_tailwind_admin_enqueue_scripts');

/**
 * Enqueue scripts and styles for frontend
 */
function wp_script_tailwind_enqueue_scripts() {
    // Enqueue the frontend script
    wp_enqueue_script(
        'wp-script-tailwind-script',
        WP_SCRIPT_TAILWIND_PLUGIN_URL . 'assets/frontend.js',
        [ 'react-jsx-runtime', 'wp-element' ], // Dependencies
        WP_SCRIPT_TAILWIND_VERSION,
        true // Load in footer
    );

    // Enqueue the frontend stylesheet with Tailwind styles
    wp_enqueue_style(
        'wp-script-tailwind-style',
        WP_SCRIPT_TAILWIND_PLUGIN_URL . 'assets/frontend.css',
        array(),
        WP_SCRIPT_TAILWIND_VERSION
    );
}
add_action('wp_enqueue_scripts', 'wp_script_tailwind_enqueue_scripts');

/**
 * Register a shortcode to display the plugin's output on frontend
 */
function wp_script_tailwind_shortcode() {
    // Create a container for our React app to render into
    ob_start();
    ?>
    <div id="wp-script-tailwind-app"></div>
    <?php
    return ob_get_clean();
}
add_shortcode('wp_script_tailwind', 'wp_script_tailwind_shortcode');
