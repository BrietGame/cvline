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

$predate = $_POST['dataFinal'][1][0]['predate'];
$lastdate = $_POST['dataFinal'][1][0]['lastdate'];
$postname = $_POST['dataFinal'][1][0]['postname'];
$entreprisename = $_POST['dataFinal'][1][0]['entreprisename'];
$postplace = $_POST['dataFinal'][1][0]['postplace'];
$postdescription = $_POST['dataFinal'][1][0]['postdescription'];

$wpdb->insert(
    $wpdb->prefix . 'cv_school',
    array(
        "school_year_start" => $predate,
        "school_year_end" => $lastdate,
        "school_job" => $postname,
        "school_name" => $entreprisename,
        "school_place" => $postplace,
        "school_description" => $postdescription
    )
);

?>

<div>
    <h1>CreateCv</h1>
</div>



<?php
get_footer();
?>