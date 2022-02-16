<?php
// action: "ajax_hobbie"

add_action('wp_ajax_ajax_hobbie', 'getHobbieWithAjax');
add_action('wp_ajax_nopriv_ajax_hobbie', 'getHobbieWithAjax'); //Pour que tout le monde puisse y accÃ©der

function getHobbieWithAjax(){
    $errors = array();
    $success = false;

    $hobbie = cleanXss('hobbie');

    $errors = textValidation($errors, $hobbie, 'hobbie', 3, 55);

    if(count($errors) === 0) {
        $success = true;
        $data = [
            'success' => $success,
            'hobbie' => $hobbie,

        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success' => $success,
        );
    }

    showJson($data);
}