<?php

function debug($tableau)
{
    echo '<pre style="height:400px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function cleanXss($key): string
{
    return trim(strip_tags($_POST[$key]));
}

function textValidation(array $errors,string $value,string $key,int $min = 3,int $max = 50):array
{
    if(!empty($value)) {
        if(mb_strlen($value) < $min) {
            $errors[$key] = 'Min '.$min.' caractères';
        } elseif (mb_strlen($value) > $max) {
            $errors[$key] = 'Max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ.';
    }
    return $errors;
}

function emailValidation($errors,$email,$key)
{
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function intValidation($errors,$int,$key){
    if(!empty($int)){
        if(is_numeric($int) != true){
            $errors[$key] = 'Veuillez renseigner un nombre';
        }
    }else{
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

function phoneValidation($errors, $phoneNumber, $key){
    if(!empty($phoneNumber)){
        $regex = '#^0[2-6-7]{1}\d{8}$#';
        if( !preg_match( $regex, $phoneNumber ) ) {
            $errors[$key] = 'Renseignez un numéro valide';
        }
    }else{
        $errors[$key] = 'Veuillez renseigner un numéro';
    }
    return $errors;

}

function showJson($data){
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if ($json){
        die($json);
    }else{
        die('error in Json encoding');
    }
}

function asset() {
    return get_template_directory_uri() . '/asset/' ;
}

function path($slug) {
    return esc_url(home_url($slug));
}

