<?php
// action: "ajax_auth"

add_action('wp_ajax_ajax_auth', 'authWithAjax');
add_action('wp_ajax_nopriv_ajax_auth', 'authWithAjax'); //Pour que tout le monde puisse y accéder

function authWithAjax(){
    // wp_create_user($pseudo, $password, $email);

    $errors = [];
    $success3 = false;

        $email = cleanXss('register_email');
        $pseudo = cleanXss('register_pseudo');
        $register_password = cleanXss('register_password');
        $confirm_register_password = cleanXss('confirm_register_password');

        $errors = emailValidation($errors, $email, 'register_email');
        $errors = textValidation($errors, $pseudo, 'register_pseudo', 3, 30);
        $errors = textValidation($errors, $register_password, 'register_password');
        $errors = textValidation($errors, $confirm_register_password, 'confirm_register_password');

        if ($register_password == $confirm_register_password){
            if (count($errors) === 0) {
                $success3 = true;
                $userdata = [
                    'success' => $success3,
                    'user_login' => $pseudo,
                    'user_pass'  => $confirm_register_password,
                    'user_email' => $email,
                 ];

                wp_insert_user($userdata);
                wp_redirect(path('/'));
                } else {
                $userdata = [
                        'errors' => $errors,
                        'success' => $success3,
                    ];
                }
            showJson($userdata);
        } else {
        $errors['register_password'] = 'Les mots de passe ne correspondent pas.';
    }
}
