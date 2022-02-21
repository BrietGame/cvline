<?php
if (!is_user_logged_in()) {
    wp_redirect(path('/'));
}
/* Template Name: Logout */
wp_logout();
wp_redirect(path('/'));
?>