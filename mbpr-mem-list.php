<?php
/**
 * Plugin Name: mbpr-mem-list
 * Plugin URI: https://github.com/dajabe/mbpr-mem-list
 * Description: Plugin for taking memberpress user lists and adding them to specific mailing lists.
 * Version: 0.1
 * Author: djb
 * Author URI: https://dajabe.nz/
 **/



// Insert a menu into Admin > Settings
add_action( 'admin_menu', 'mem_list_menu' );

function mem_list_menu() {
	add_options_page( 'Memberlist to Mailer', 'Import Memberlists', 'manage_options', 'mbpr-mem-list', 'mem_list_main' );
}

// Page of doing
function mem_list_main() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<h1>Memberlists to mailing lists</h1>';
	echo '<div class="wrap">';
	echo '<p>Select from the lists below to add specific user subscriptions to </p>';
	echo '</div>';
}
?>