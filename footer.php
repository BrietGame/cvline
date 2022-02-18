<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Projet_CVtheques
 */

?>

<footer id="footer">
    <div class="wrap1">
        <nav>
            <ul>
                <li><a href="<?php echo path('faq'); ?>">FAQ</a></li>
                <li><a href="<?php echo path('cgu'); ?>">CGU</a></li>
                <li><a href="<?php echo path('legals'); ?>">Mentions légales</a></li>
                <li><a href="<?php echo path('about'); ?>">À propos</a></li>
                <li><a href="<?php echo path('login'); ?>">S'inscrire/ Se connecter</a></li>
            </ul>
        </nav>
        <div class="copyright">
            <a href="<?php echo path('/'); ?>">
                <p class="text-copy"> © Copyright CV LINE Company</p>
            </a>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>