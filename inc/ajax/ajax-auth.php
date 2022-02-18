<?php
// action: "ajax_auth"

add_action('wp_ajax_ajax_auth', 'authWithAjax');
add_action('wp_ajax_nopriv_ajax_auth', 'authWithAjax'); //Pour que tout le monde puisse y accéder

function authWithAjax()
{
    // wp_create_user($pseudo, $password, $email);


    $errors = [];
    $success2 = false;

    if (!empty($_POST['submitted_register'])) {

        $email = cleanXss('email');
        $pseudo = cleanXss('pseudo');
        $register_password = cleanXss('register_password');
        $confirm_register_password = cleanXss('confirm_register_password');

        $errors = emailValidation($errors, $email, 'email');
        $errors = textValidation($errors, $pseudo, 'pseudo');
        $errors = textValidation($errors, $register_password, 'register_password');
        $errors = textValidation($errors, $confirm_register_password, 'confirm_register_password');

        if ($register_password == $confirm_register_password) {
            if (count($errors) === 0) {
                $success2 = true;
                $data = [
                    'success2' => $success2,
                    [
                        'email' => $email,
                        'pseudo' => $pseudo,
                        'register_password' => $register_password,
                        'confirm_register_password' => $confirm_register_password
                    ],
                ];
            } else {
                $data = array(
                    'errors' => $errors,
                    'success2' => $success2,
                );
            }
        } else {
            echo "<script>openNav();</script>";
            $errors['password'] = 'Les mots de passe ne correspondent pas.';
        }
    }
}
