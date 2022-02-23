<?php

$user = wp_get_current_user();
$userId = $user->ID;

global $wpdb;
$getCvInfo = $wpdb->get_results(
    "SELECT * FROM {$wpdb->prefix}cv_global
            LEFT JOIN {$wpdb->prefix}pivot_usertocv
            ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id
            WHERE {$wpdb->prefix}pivot_usertocv.user_id = $userId", OBJECT);

//Pour vérifier id

$i = $_GET['id']+1;

$getCvWork = $wpdb->get_results(
    "SELECT works.work_name AS jobname FROM {$wpdb->prefix}cv_work AS works
            LEFT JOIN {$wpdb->prefix}pivot_work AS pivot 
            ON works.work_id = pivot.work_id
            WHERE pivot.cv_id = $i", OBJECT);


