<?php
// action: "ajax_auth"

add_action('wp_ajax_ajax_auth', 'authWithAjax');
add_action('wp_ajax_nopriv_ajax_auth', 'authWithAjax'); //Pour que tout le monde puisse y accéder

function authWithAjax()
{
    // wp_create_user($pseudo, $password, $email);

    $errorRegister = [];
    $success3 = 22;

    $email = cleanXss('register_email');
    $pseudo = cleanXss('register_pseudo');
    $register_password = cleanXss('register_password');
    $confirm_register_password = cleanXss('confirm_register_password');

    $errorRegister = emailValidation($errorRegister, $email, 'register_email');
    $errorRegister = textValidation($errorRegister, $pseudo, 'register_pseudo', 3, 30);
    $errorRegister = textValidation($errorRegister, $register_password, 'register_password');
    $errorRegister = textValidation($errorRegister, $confirm_register_password, 'confirm_register_password');

    if ($register_password != $confirm_register_password) {
        $errorRegister['register_password'] = 'Les mots de passe ne correspondent pas.';
    }
    // if (empty($_POST['register_cgu'])) {
    //     $errorRegister['register_email'] = 'Veuilelz renseigner les CGU';
    // }

    if (count($errorRegister) === 0) {
        $success3 = 11;
        $userdata = [
            'success' => $success3,
            'user_login' => $pseudo,
            'user_pass'  => $confirm_register_password,
            'user_email' => $email,
        ];

        wp_insert_user($userdata);
        wp_redirect(path('/generer-cv'));
    } else {
        $userdata = [
            'errorregister' => $errorRegister,
            'success3' => $success3,
        ];
    }
    showJson($userdata);
}
