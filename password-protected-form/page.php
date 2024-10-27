<?php 
/*
Show the password form for a password-protected page in a custom wordpress theme
*/


if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Check if the content is password-protected
        if ( post_password_required() ) {
            // Display the password form if required
            echo get_the_password_form();
        } else {
            // Display the content if password has been entered
            the_content();
        }
    endwhile;
endif;

