<?php

add_action('admin_menu', 'register_visideign_menu_page');
add_action( 'admin_init', 'register_visideign_settings' );
define( 'VISIDEIGN_DOMAIN', 'visideign-login' );

function register_visideign_menu_page() {

add_menu_page('visideign Login', 'visideign Login', 'add_users', __FILE__, 'visideign_plugin_menu', plugins_url('visideign-login/img/icon.png'));

add_submenu_page(__FILE__, __('How to Use | VISIDEIGN Login', VISIDEIGN_DOMAIN ), __('How to Use', VISIDEIGN_DOMAIN ), 'add_users', __FILE__, 'visideign_plugin_menu');

add_submenu_page(__FILE__, 'Settings | visideign Login', 'Settings', 'manage_options', 'visideign_settings', 'visideign_settings_page');

add_submenu_page(__FILE__, 'Server Information | visideign Login', 'Server Information', 'add_users', 'visideign_server_info', 'visideign_server_info_menu');
}

function register_visideign_settings() {
register_setting( 'visideign-settings-group', 'visideign_option_dash' );
register_setting( 'visideign-settings-group', 'visideign_option_lost' );
register_setting( 'visideign-settings-group', 'visideign_option_pro' );
register_setting( 'visideign-settings-group', 'visideign_option_recent' );
register_setting( 'visideign-settings-group', 'visideign_option_xtra' );
}

include "admin/sidebar.php";

function visideign_plugin_menu() {
if ( !current_user_can( 'manage_options' ) )  {
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
include "admin/usage.php";
}


function visideign_settings_page() {
if ( !current_user_can( 'manage_options' ) )  {
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
include "admin/settings.php";
}

function visideign_server_info_menu() {
if ( !current_user_can( 'manage_options' ) )  {
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
include "admin/server_info.php";
}

?>