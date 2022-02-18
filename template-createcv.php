<?php
get_header();
/* Template Name: CreateCv */

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

// Mes Expériences _ school

$finalDataExp = $_POST['dataFinal'][4];

for($i = 0; $i <= 5 ; $i++){
    $schoolStart = $finalDataExp[$i][0]['schoolStart'];
    $schoolEnd = $finalDataExp[$i][0]['schoolEnd'];
    $schoolFormation = $finalDataExp[$i][0]['schoolFormation'];
    $schoolName = $finalDataExp[$i][0]['schoolName'];
    $schoolPlace = $finalDataExp[$i][0]['schoolPlace'];
    $schoolDescription = $finalDataExp[$i][0]['schoolDescription'];

    $wpdb->insert(
        $wpdb->prefix . 'cv_school',
        array(
            "school_year_start" => $schoolStart,
            "school_year_end" => $schoolEnd,
            "school_job" => $schoolFormation,
            "school_name" => $schoolName,
            "school_place" => $schoolPlace,
            "school_description" => $schoolDescription
        )
    );
}



// Mon parcours _ work

$finalDataWork = $_POST['dataFinal'][1];

for($i = 0; $i <= 5 ; $i++){

    $predate = $finalDataWork[$i][0]['predate'];
    $lastdate = $finalDataWork[$i][0]['lastdate'];
    $postName = $finalDataWork[$i][0]['postname'];
    $entreprisename = $finalDataWork[$i][0]['entreprisename'];
    $postPlace = $finalDataWork[$i][0]['postplace'];
    $postDescription = $finalDataWork[$i][0]['postdescription'];

    $wpdb->insert(
        $wpdb->prefix . 'cv_work',
        array(
            "work_name" => $postName,
            "work_description" => $postDescription,
            "work_company" => $entreprisename,
            "work_place" => $postPlace,
            "work_year_start" => $predate,
            "work_year_end" => $lastdate,
        )
    );
}

//COMPETENCES

$finalDataSkill = $_POST['dataFinal'][2];

for($i = 0; $i <= 5 ; $i++){

    $skillName = $finalDataSkill[$i];

    $wpdb->insert(
        $wpdb->prefix . 'cv_skills',
        array(
            "skills_name" => $skillName,
        )
    );
}

//LOISIR

$finalDataHobbie = $_POST['dataFinal'][3];

for($i = 0; $i <= 5 ; $i++){

    $hobbieName = $finalDataHobbie[$i];

    $wpdb->insert(
        $wpdb->prefix . 'cv_hobbie',
        array(
            "hobbie_name" => $hobbieName,
        )
    );
}


?>

<div>
    <h1>CreateCv</h1>
</div>



<?php
get_footer();
?>