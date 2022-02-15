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

    $errors = emailValidation($errors, $email, 'email');

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

