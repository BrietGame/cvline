<?php
// action: "ajax_skill"

add_action('wp_ajax_ajax_skill', 'getSkillWithAjax');
add_action('wp_ajax_nopriv_ajax_skill', 'getSkillWithAjax'); //Pour que tout le monde puisse y accÃ©der

function getSkillWithAjax(){

    $errors = array();
    $success3 = false;

    $searchskill = cleanXss('searchskill');

    $errors = textValidation($errors, $searchskill, 'searchskill',2, 55);


    if(count($errors) === 0) {
        $success3 = true;
        $data = [
            'success3' => $success3,
            'searchskill' => $searchskill,

        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success3' => $success3,
        );
    }

    showJson($data);
}