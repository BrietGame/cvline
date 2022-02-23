<?php

$user = wp_get_current_user();
$userId = $user->ID;

global $wpdb;
$getCvInfo = $wpdb->get_results(
    "SELECT * FROM {$wpdb->prefix}cv_global
            LEFT JOIN {$wpdb->prefix}pivot_usertocv
            ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id
            WHERE {$wpdb->prefix}pivot_usertocv.user_id = $userId", OBJECT);

//Pour vérifier id du cv
if(!empty($_GET['cv'])){
    $i = $_GET['cv'];

    $getCvWork = $wpdb->get_results(
        "SELECT works.work_name AS jobname, works.work_description AS jobdescription, works.work_company AS jobcompany, 
            works.work_place AS jobplace, works.work_year_start  AS jobstart, works.work_year_end AS jobend
            FROM {$wpdb->prefix}cv_work AS works
            LEFT JOIN {$wpdb->prefix}pivot_work AS pivot
            ON works.work_id = pivot.work_id
            WHERE pivot.cv_id = $i", OBJECT);

    $getCvSchool = $wpdb->get_results(
        "SELECT schools.school_name AS schoolname, schools.school_place AS schoolplace, schools.school_year_start AS schoolstart,
            schools.school_year_end AS schoolend, schools.school_description AS schooldescription, schools.school_job AS schooljob
            FROM {$wpdb->prefix}cv_school AS schools
            LEFT JOIN {$wpdb->prefix}pivot_school AS pivotschool 
            ON schools.school_id = pivotschool.school_id
            WHERE pivotschool.cv_id = $i", OBJECT);

    $getCvSkill = $wpdb->get_results(
        "SELECT skills.skills_name AS skillname
            FROM {$wpdb->prefix}cv_skills AS skills
            LEFT JOIN {$wpdb->prefix}pivot_skills AS pivotskills
            ON skills.skills_id = pivotskills.skills_id
            WHERE pivotskills.cv_id = $i", OBJECT);

    $getCvHobbie = $wpdb->get_results(
        "SELECT hobbies.hobbie_name AS hobbiename
            FROM {$wpdb->prefix}cv_hobbie AS hobbies
            LEFT JOIN {$wpdb->prefix}pivot_hobbie AS pivothobbie
            ON hobbies.hobbie_id = pivothobbie.hobbie_id
            WHERE pivothobbie.cv_id = $i", OBJECT);
}





