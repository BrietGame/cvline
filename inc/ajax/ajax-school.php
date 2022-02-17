<?php
// action: "ajax_school"

add_action('wp_ajax_ajax_school', 'getSchoolWithAjax');
add_action('wp_ajax_nopriv_ajax_school', 'getSchoolWithAjax'); //Pour que tout le monde puisse y accÃ©der

function getSchoolWithAjax(){
    $errors = array();
    $success = false;

    $schoolStart = cleanXss('school_start');
    $schoolEnd = cleanXss('school_end');
    $schoolFormation = cleanXss('school_formation');
    $schoolName = cleanXss('school_name');
    $schoolPlace = cleanXss('school_place');
    $schoolDescription = cleanXss('school_description');

    $errors = dateValidation($errors, $schoolStart, 'school_start');
    $errors = dateValidation($errors, $schoolEnd, 'school_end');
    $errors = textValidation($errors, $schoolFormation, 'school_formation', 4, 60);
    $errors = textValidation($errors, $schoolName, 'school_name', 4, 45);
    $errors = textValidation($errors, $schoolPlace, 'school_place', 4, 50);
    $errors = textValidation($errors, $schoolDescription, 'school_description', 4, 400);


    if(count($errors) === 0) {
        $success = true;
        $data = [
            'success' => $success,
            [
                'schoolStart' => $schoolStart,
                'schoolEnd' => $schoolEnd,
                'schoolFormation' => $schoolFormation,
                'schoolName' => $schoolName,
                'schoolPlace' => $schoolPlace,
                'schoolDescription' => $schoolDescription,
            ],
        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success' => $success,
        );
    }

    showJson($data);
}