<?php

function allow_password_access_via_url($required) {
    // Check if the 'access_password' parameter is in the URL
    if ( isset($_GET['access_password']) ) {
        global $post;
        
        // Retrieve and sanitize the password from the URL
        $access_password = sanitize_text_field($_GET['access_password']);
        
        // If the password matches the post's password, bypass the requirement
        if ( $post && $access_password === $post->post_password ) {
            return false; // Bypass the password requirement
        }
    }
    
    return $required;
}

add_filter('post_password_required', 'allow_password_access_via_url');
