<?php
/*
Plugin Name: Hide Register
Description: Hide Register button if user is logged in
Version: 1.0
Author: Harpreet Singh

*/

add_action( 'loop_start', 'hide_register_button' );
function hide_register_button() {

    if ( is_user_logged_in() ) {
        
    } else {
        
    }
}


?>