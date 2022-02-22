<?php

$user = wp_get_current_user();
$userId = $user->ID;

global $wpdb;
$getCvInfo = $wpdb->get_results(
"SELECT * FROM {$wpdb->prefix}cv_global
LEFT JOIN {$wpdb->prefix}pivot_usertocv
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id
WHERE {$wpdb->prefix}pivot_usertocv.user_id = $userId", OBJECT);

if(count($getCvInfo) != 0){
for($i=0; $i<=count($getCvInfo)-1; $i++){
$getUserCv = $getCvInfo[$i]->cv_id;
}

$getInfoWork = $wpdb->get_results(
"SELECT * FROM {$wpdb->prefix}cv_work
LEFT JOIN {$wpdb->prefix}pivot_work
ON {$wpdb->prefix}cv_work.work_id = {$wpdb->prefix}pivot_work.work_id
WHERE {$wpdb->prefix}pivot_work.cv_id = $getUserCv", OBJECT);

$getInfoSkills = $wpdb->get_results(
"SELECT * FROM {$wpdb->prefix}cv_skills
LEFT JOIN {$wpdb->prefix}pivot_skills
ON {$wpdb->prefix}cv_skills.skills_id = {$wpdb->prefix}pivot_skills.skills_id
WHERE {$wpdb->prefix}pivot_skills.cv_id = $getUserCv", OBJECT);

$getInfoHobbie = $wpdb->get_results(
"SELECT * FROM {$wpdb->prefix}cv_hobbie
LEFT JOIN {$wpdb->prefix}pivot_hobbie
ON {$wpdb->prefix}cv_hobbie.hobbie_id = {$wpdb->prefix}pivot_hobbie.hobbie_id
WHERE {$wpdb->prefix}pivot_hobbie.cv_id = $getUserCv", OBJECT);

$getInfoSchool = $wpdb->get_results(
"SELECT * FROM {$wpdb->prefix}cv_school
LEFT JOIN {$wpdb->prefix}pivot_school
ON {$wpdb->prefix}cv_school.school_id = {$wpdb->prefix}pivot_school.school_id
WHERE {$wpdb->prefix}pivot_school.cv_id = $getUserCv", OBJECT);

//    debug($getInfoWork);
//    debug($getInfoSkills);
//    debug($getInfoHobbie);
//    debug($getInfoSchool);

}