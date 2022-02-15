<?php
// action: "ajax_experience"

add_action('wp_ajax_ajax_experience', 'getExperienceWithAjax');
add_action('wp_ajax_nopriv_ajax_experience', 'getExperienceWithAjax'); //Pour que tout le monde puisse y accéder

function getExperienceWithAjax(){

    $errors = array();
    $success2 = false;

    $predate = cleanXss('predate');
    $lastdate = cleanXss('lastdate');
    $postname = cleanXss('postname');
    $entreprisename = cleanXss('entreprisename');
    $postplace = cleanXss('postplace');
    $postdescription = cleanXss('postdescription');

//    $errors = emailValidation($errors, $pos, 'email');

    if(count($errors) === 0) {
        $success2 = true;
        $data = [
            'success2' => $success2,
            'predate' => $predate,
            'lastdate' => $lastdate,
            'postname' => $postname,
            'entreprisename' => $entreprisename,
            'postplace' => $postplace,
            'postdescription' => $postdescription,
        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success2' => $success2,
        );
    }

    showJson($data);
}

