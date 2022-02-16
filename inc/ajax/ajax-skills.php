<?php
// action: "ajax_skill"

add_action('wp_ajax_ajax_skill', 'getSkillWithAjax');
add_action('wp_ajax_nopriv_ajax_skill', 'getSkillWithAjax'); //Pour que tout le monde puisse y accÃ©der

function getSkillWithAjax(){

    $errors = array();
    $success = false;

    $skill = cleanXss('searchskill');


    $errors = textValidation($errors, $skill, 'searchskill', 2, 55);


    if(count($errors) === 0) {
        $success = true;
        $data = [
            'success' => $success,
            'searchskill' => $skill,

        ];

    }else{
        $data = array(
            'errors' => $errors,
            'success' => $success,
        );
    }

    showJson($data);
}