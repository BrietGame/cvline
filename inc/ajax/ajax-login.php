<?php
// action: "ajax_login"

add_action('wp_ajax_ajax_login', 'logWithAjax');
add_action('wp_ajax_nopriv_ajax_login', 'logWithAjax');

function logWithAjax(){
    $errors = [];
    $success = false;

    $login = cleanXss('login');
    $login_password = cleanXss('login_password');

    $errors = textValidation($errors, $login, 'login');
    $errors = textValidation($errors, $login_password, 'login_password');

    if (count($errors) === 0) {
        $success = true;
        $data = [
            'success' => $success,
            'user_login' => $login,
            'user_password' => $login_password
        ];

        showJson($data);
        wp_signon($data);
        wp_redirect(path('/'));
    }
}