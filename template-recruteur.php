<?php
if (!is_user_logged_in()) {
    wp_redirect(path('/'));
}
get_header();
/* Template Name: EspaceRecruteur */
?>

<div>
    <h1>EspaceRecruteur</h1>
</div>



<?php
get_footer();
?>