
<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Projet_CVtheques
 */

get_header();
?>

<section id="notfound">
    <div class="wrap">
        <span class="title">Oooops...</span>
        <span class="undertitle">Cette page n'existe pas</span>
        <a class="btnBlue" href="<?= path('/') ?>">Revenir à l'accueil</a>
    </div>
</section><!-- .error-404 -->


<?php
get_footer();

