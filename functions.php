<?php

/* Inc */
require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';
require get_template_directory() . '/inc/img.php';

//AJAX
require_once get_template_directory() . '/inc/ajax/ajax-generatecv.php';
require_once get_template_directory() . '/inc/ajax/ajax-experience.php';
require_once get_template_directory() . '/inc/ajax/ajax-skills.php';
require_once get_template_directory() . '/inc/ajax/ajax-hobbie.php';
require_once get_template_directory() . '/inc/ajax/ajax-school.php';
require_once get_template_directory() . '/inc/ajax/ajax-final.php';
// require_once get_template_directory() . '/inc/ajax/ajax-auth.php';

/* Extra */
require get_template_directory() . '/inc/extra/template-functions.php';
require get_template_directory() . '/inc/extra/template-tags.php';
