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
    $birthday = cleanXss('birthday');
    $phone = cleanXss('phone');

    $errors = textValidation($errors, $surname, 'surname', 2, 55);
    $errors = textValidation($errors, $name, 'name', 2, 50);
    $errors = emailValidation($errors, $email, 'email');
    $errors = textValidation($errors, $adress, 'adress', 10, 70);
    $errors = intValidation($errors, $postal, 'postal');
    $errors = textValidation($errors, $city, 'city', 4, 70);
    $errors = phoneValidation($errors, $phone, 'phone');


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
            'birtday' => $birthday,
            'phone' => $phone,
        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success' => $success,
        );
    }

    showJson($data);
}

