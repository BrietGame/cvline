<?php
// action: "ajax_final"
add_action('wp_ajax_ajax_final', 'insertAvecAjax');
add_action('wp_ajax_nopriv_ajax_final', 'insertAvecAjax'); //Pour que tout le monde puisse y accéder

function insertAvecAjax()
{
}
