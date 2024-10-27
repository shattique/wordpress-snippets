## Function: allow_password_access_via_url
This function modifies the WordPress password protection mechanism to allow access to a post via a URL parameter.

### How It Works:
Checks for Password in URL: The function looks for an access_password parameter in the URL.
Sanitization: It retrieves and sanitizes this password for security.
Password Validation: If the provided password matches the post's password, the function bypasses the standard password requirement, allowing access.
Hooking into WordPress: The function is integrated into WordPress by using the post_password_required filter, enabling this functionality across protected posts.

### Usage:
To use this function, add it to your theme's functions.php file or a custom plugin. It provides a convenient way for users to access password-protected content directly via a link with the correct password.