<?php
// action: "ajax_generatecv"

add_action('wp_ajax_ajax_generatecv', 'getGeneratecvWithAjax');
add_action('wp_ajax_nopriv_ajax_generatecv', 'getGeneratecvWithAjax'); //Pour que tout le monde puisse y accéder

function getGeneratecvWithAjax(){

    $errors = array();
    $success = false;

    $surname = cleanXss('surname');
    $name = cleanXss('name');
    $email = cleanXss('email');
    $adress = cleanXss('adress');
    $postal = cleanXss('postal');
    $city = cleanXss('city');

    $errors = textValidation($errors, $surname, 'surname', 2, 55);
    $errors = textValidation($errors, $name, 'name', 2, 50);
    $errors = emailValidation($errors, $email, 'email');
    $errors = textValidation($errors, $adress, 'adress', 5, 70);
    $errors = intValidation($errors, $postal, 'postal');
    $errors = textValidation($errors, $city, 'city', 10, 70);

    if(count($errors) === 0) {
        $success = true;
        $data = [
            'success' => $success,
            'surname' => $surname,
            'name' => $name,
            'email' => $email,
            'adress' => $adress,
            'postal' => $postal,
            'city' => $city,
        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success' => $success,
        );
    }

    showJson($data);
}

