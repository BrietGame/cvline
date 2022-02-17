<?php
get_header();
/* Template Name: CreateCv */
debug($_POST);
$surname = $_POST['dataFinal'][0]['surname'];
$name = $_POST['dataFinal'][0]['name'];
$birthday = $_POST['dataFinal'][0]['birtday'];
$email = $_POST['dataFinal'][0]['email'];
$phone = $_POST['dataFinal'][0]['phone'];
$adress = $_POST['dataFinal'][0]['adress'];
$postal = $_POST['dataFinal'][0]['postal'];
$city = $_POST['dataFinal'][0]['city'];

global $wpdb;
$wpdb->insert(
    $wpdb->prefix . 'cv_global',
    array(
        "cv_surname" => $surname,
        "cv_name" => $name,
        "cv_email" => $email,
        "cv_adress" => $adress,
        "cv_birthday" => $birthday,
        "cv_phone" => $phone,
        "cv_postal" => $postal,
        "cv_city" => $city,
        "cv_created_at" => current_time('mysql')
    )
);
?>

<div>
    <h1>CreateCv</h1>
</div>



<?php
get_footer();
?>