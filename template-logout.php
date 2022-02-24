<?php
/* Template Name: Logout */
isNotLogged();
wp_logout();
wp_redirect(path('/'));
