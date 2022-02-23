<?php

$user = wp_get_current_user();
$userId = $user->ID;

global $wpdb;
$getCvInfo = $wpdb->get_results(

"SELECT * FROM {$wpdb->prefix}cv_global
JOIN {$wpdb->prefix}pivot_usertocv
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id
JOIN {$wpdb->prefix}pivot_work
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_work.cv_id
JOIN {$wpdb->prefix}pivot_skills
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_skills.cv_id
JOIN {$wpdb->prefix}pivot_hobbie
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_hobbie.cv_id
JOIN {$wpdb->prefix}pivot_school
ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_school.cv_id
WHERE {$wpdb->prefix}pivot_usertocv.user_id = $userId", OBJECT);