<?php
if (!is_user_logged_in()) {
    wp_redirect(admin_url() . '../login');
}
get_header();
/* Template Name: EspaceCandidat */
?>

<div>
    <h1>Espace Candidat</h1>
</div>



<?php
get_footer();
?>