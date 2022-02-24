<?php
// action: "ajax_login"

add_action('wp_ajax_ajax_login', 'logWithAjax');
add_action('wp_ajax_nopriv_ajax_login', 'logWithAjax');

function logWithAjax()
{
    $errorsLogin = [];
    $successlogin = 33;

    $login = cleanXss('login');
    $login_password = cleanXss('login_password');

    $errorsLogin = textValidation($errorsLogin, $login, 'login');
    $errorsLogin = textValidation($errorsLogin, $login_password, 'login_password');

    if (count($errorsLogin) === 0) {
        $successlogin = 44;
        $data = [
            'success' => $successlogin,
            'user_login' => $login,
            'user_password' => $login_password
        ];

        showJson($data);
        wp_signon($data);
        wp_redirect(path('/'));
    }
}
