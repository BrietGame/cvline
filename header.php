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
    <?php wp_body_open();
    $user = wp_get_current_user();

    ?>
    <header>
        <div class="logo">
            <a href="<?php echo path('/'); ?>">
                <img src=" <?php echo get_template_directory_uri() ?>/asset/img/cvline_blue.svg" alt="logo">
            </a>
        </div>
        <div id="menuprincipal" class="displaynone">
            <a href="javascript:void(0)" id="closeMenuPrincipal" class="closebtn">&times; </a>
            <div class="overlay-content">
                <a class="btnTransparent" href="<?= path('generer-cv') ?>"><i class="fa-solid fa-file-lines"></i> Générer mon cv</a>
                <?php if (is_user_logged_in()) { ?>
                    <hr>
                    <a class="btnTransparent" id="modalBtn3" href="<?= path('/?red=mon-espace') ?>">Accéder à mon espace</a>
                    <a href="<?= path('logout') ?>">Se déconnecter</a>
                <?php } else { ?>
                    <a class="btnTransparent" id="modalBtn3" href="<?= path('/?red=auth') ?>">S'authentifier</a>
                <?php } ?>
                <?php if (is_user_logged_in() && $user->roles[0] == 'Recruteur') { ?>
                    <a class="btnTransparent" href="<?= path('espace-recruteur') ?>"><i class="fa-solid fa-user"></i> Espace Recruteur</a>
                <?php } else if (is_user_logged_in() && $user->roles[0] == 'Candidat') { ?>
                    <a class="btnTransparent" href="<?= path('espace-candidat') ?>"><i class="fa-solid fa-user"></i> Espace Candidat</a>
                    <a class="btnTransparent" href="<?= path('generer-cv') ?>"><i class="fa-solid fa-file-lines"></i> Générer mon cv</a>
                <?php } else if (is_user_logged_in() && $user->roles[0] != 'Candidat' && $user->roles[0] != 'Recruteur') { ?>
                    <a class="btnTransparent" href="<?= admin_url('/') ?>"><i class="fa-solid fa-user"></i> Administration</a>
                    <a class="btnTransparent" href="<?= path('espace-recruteur') ?>"><i class="fa-solid fa-user"></i> Espace Recruteur</a>
                    <a class="btnTransparent" href="<?= path('espace-candidat') ?>"><i class="fa-solid fa-user"></i> Espace Candidat</a>
                    <hr>
                <?php } ?>
                <a href=" <?php echo path('faq'); ?>">FAQ</a>
                <a href="<?php echo path('legals'); ?>">Mentions légales</a>
                <a href="<?php echo path('/#about'); ?>">À propos</a>
            </div>
        </div>
        <span id="openMenuPrincipal">&#9776; </span>
    </header>