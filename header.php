<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Projet_CVtheques
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="logo">

        <a href="<?php echo path('/'); ?>"><img src=" <?php echo get_template_directory_uri() ?>/asset/img/logoCVline1.svg" alt="logo"></a>
        <div id="menuprincipal" class="displaynone">
            <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
            <div class="overlay-content">
                <a class="#" href="<?php echo path('login'); ?>">S'inscrire/Se connecter</a>
                <a href="<?php echo path('faq'); ?>">FAQ</a>
                <a href="<?php echo path('cgu'); ?>">CGU</a>
                <a href="<?php echo path('legals'); ?>">Mentions légales</a>
                <a href="<?php echo path('about'); ?>">À propos</a>
            </div>
        </div>
        <span class="openNav" onclick="openMenu()">&#9776;</span>
    </div>
    <script>
        // HEADER
        function openMenu() {
            document.getElementById("menuprincipal").className = "overlay slide-in-left ";
        }

        function closeMenu() {
            document.getElementById("menuprincipal").className = "overlay slide-out-left";
            setTimeout(function() {
                document.getElementById("menuprincipal").className = "displaynone";
            }, 500)
        }
        $('#openMenu').on('click', function(e) {
            openMenu();
        })
    </script>