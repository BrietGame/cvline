<?php

global $wpdb;
$getCvRecruteur = $wpdb->get_results(
    "SELECT * FROM {$wpdb->prefix}cv_global
            LEFT JOIN {$wpdb->prefix}pivot_usertocv
            ON {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id
            WHERE {$wpdb->prefix}cv_global.cv_id = {$wpdb->prefix}pivot_usertocv.cv_id", OBJECT);


