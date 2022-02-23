<?php

/**
 * Projet CVtheques functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Projet_CVtheques
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function projet_cvtheques_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Projet CVtheques, use a find and replace
        * to change 'projet-cvtheques' to the name of your theme in all the template files.
        */
    load_theme_textdomain('projet-cvtheques', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'projet-cvtheques'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'projet_cvtheques_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'projet_cvtheques_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function projet_cvtheques_content_width()
{
    $GLOBALS['content_width'] = apply_filters('projet_cvtheques_content_width', 640);
}
add_action('after_setup_theme', 'projet_cvtheques_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function projet_cvtheques_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'projet-cvtheques'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'projet-cvtheques'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'projet_cvtheques_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function projet_cvtheques_scripts()
{

    wp_enqueue_style('projet-cvtheques-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '1.0.0');
    wp_enqueue_style('izitoastcss', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css', array(), '1.0.0');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);



    wp_enqueue_script('data-cookie', get_template_directory_uri() . '/asset/js/data-cookie.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('toastjs', get_template_directory_uri() . '/asset/js/toast.js', _S_VERSION, true);
    wp_enqueue_script('izitoastjs', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js', _S_VERSION, true);

    // wp_enqueue_script('ajax-auth', get_template_directory_uri() . '/asset/js/ajax-auth.js', array('jquery'), _S_VERSION, true);


    if (is_page_template('template-generatecv.php')) {
        wp_enqueue_script('fil-ariane', get_template_directory_uri() . '/asset/js/fil-ariane.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('todo-skill', get_template_directory_uri() . '/asset/js/todo-skill.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('todo-hobbies', get_template_directory_uri() . '/asset/js/todo-hobbies.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-generatecv', get_template_directory_uri() . '/asset/js/ajax-generatecv.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-experience', get_template_directory_uri() . '/asset/js/ajax-experience.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-skill', get_template_directory_uri() . '/asset/js/ajax-skill.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-hobbie', get_template_directory_uri() . '/asset/js/ajax-hobbie.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-school', get_template_directory_uri() . '/asset/js/ajax-school.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-recruteur', get_template_directory_uri() . '/asset/js/ajax-recruteur.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('ajax-final', get_template_directory_uri() . '/asset/js/ajax-final.js', array('jquery'), _S_VERSION, true);
        wp_add_inline_script('ajax-generatecv', 'const ajaxUrl = ' . json_encode(admin_url('admin-ajax.php')), 'before');
    }
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_page_template('template-recruteur.php') || is_page_template('template-candidat.php')) {
        wp_enqueue_script('search', get_template_directory_uri() . '/asset/js/search.js', array('jquery'), _S_VERSION, true);
    }


    wp_enqueue_script('mainjs', get_template_directory_uri() . '/asset/js/main.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('404js', get_template_directory_uri() . '/asset/js/404.js', _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'projet_cvtheques_scripts');

// ROLES

add_role('Recruteur', 'Recruteur', get_role('subscriber')->capabilities);
add_role('Candidat', 'Candidat', get_role('subscriber')->capabilities);

function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/asset/img/logoCVline.svg);
            width: 100%;
            background-repeat: no-repeat;
        }
    </style>
<?php }

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

add_action('login_enqueue_scripts', 'my_login_logo');

function my_custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/asset/sass/pages/login.scss" />';
}
add_action('login_head', 'my_custom_login');

/* 

MOT DE PASSE OUBLIE | INSCRIPTION | CONNEXION

*/

/**
 * Finds and returns a matching error message for the given error code.
 *
 * @param string $error_code    The error code to look up.
 *
 * @return string               An error message.
 */
function get_error_message($error_code)
{
    switch ($error_code) {
        case 'empty_username':
            return __('You do have an email address, right?', 'personalize-login');

        case 'empty_password':
            return __('You need to enter a password to login.', 'personalize-login');

        case 'invalid_username':
            return __(
                "We don't have any users with that email address. Maybe you used a different one when signing up?",
                'personalize-login'
            );

        case 'incorrect_password':
            $err = __(
                "The password you entered wasn't quite right. <a href='%s'>Did you forget your password</a>?",
                'personalize-login'
            );
            return sprintf($err, wp_lostpassword_url());

        default:
            break;
    }

    return __('An unknown error occurred. Please try again later.', 'personalize-login');
}





// Information needed for creating the plugin's pages
$page_definitions = array(
    'member-login' => array(
        'title' => __('Sign In', 'personalize-login'),
        'content' => '[custom-login-form]'
    ),
    'member-account' => array(
        'title' => __('Your Account', 'personalize-login'),
        'content' => '[account-info]'
    ),
    'member-register' => array(
        'title' => __('Register', 'personalize-login'),
        'content' => '[custom-register-form]'
    ),
    'member-password-lost' => array(
        'title' => __('Forgot Your Password?', 'personalize-login'),
        'content' => '[custom-password-lost-form]'
    ),
    'member-password-reset' => array(
        'title' => __('Pick a New Password', 'personalize-login'),
        'content' => '[custom-password-reset-form]'
    )
);

function redirect_to_custom_lostpassword()
{
    if ('GET' == $_SERVER['REQUEST_METHOD']) {
        if (is_user_logged_in()) {
            redirect_logged_in_user();
            exit;
        }

        wp_redirect(home_url('member-password-lost'));
        exit;
    }
}

add_action('login_form_lostpassword', 'redirect_to_custom_lostpassword');
add_shortcode('custom-password-lost-form', 'render_password_lost_form');

/*
INSCRIPTION
*/

// Retrieve possible errors from request parameters
$attributes['errors'] = array();
if (isset($_REQUEST['register-errors'])) {
    $error_codes = explode(',', $_REQUEST['register-errors']);

    foreach ($error_codes as $error_code) {
        $attributes['errors'][] = get_error_message($error_code);
    }
}


/**
 * A shortcode for rendering the new user registration form.
 *
 * @param  array   $attributes  Shortcode attributes.
 * @param  string  $content     The text content for shortcode. Not used.
 *
 * @return string  The shortcode output
 */
function render_register_form($attributes, $content = null)
{
    // Parse shortcode attributes
    $default_attributes = array('show_title' => false);
    $attributes = shortcode_atts($default_attributes, $attributes);

    if (is_user_logged_in()) {
        return __('You are already signed in.', 'personalize-login');
    } elseif (!get_option('users_can_register')) {
        return __('Registering new users is currently not allowed.', 'personalize-login');
    } else {
        return get_template_html('register_form', $attributes);
    }
}
add_shortcode('custom-register-form', 'render_register_form');
/**
 * Redirects the user to the custom registration page instead
 * of wp-login.php?action=register.
 */
function redirect_to_custom_register()
{
    if ('GET' == $_SERVER['REQUEST_METHOD']) {
        if (is_user_logged_in()) {
            redirect_logged_in_user();
        } else {
            wp_redirect(path('/'));
        }
        exit;
    }
}
add_action('login_form_register', 'redirect_to_custom_register');
function register_user($email, $first_name, $last_name)
{
    $errors = new WP_Error();

    // Email address is used as both username and email. It is also the only
    // parameter we need to validate
    if (!is_email($email)) {
        $errors->add('email', get_error_message('email'));
        return $errors;
    }

    if (username_exists($email) || email_exists($email)) {
        $errors->add('email_exists', get_error_message('email_exists'));
        return $errors;
    }

    // Generate the password so that the subscriber will have to check email...
    $password = wp_generate_password(12, false);

    $user_data = array(
        'user_login'    => $email,
        'user_email'    => $email,
        'user_pass'     => $password,
        'first_name'    => $first_name,
        'last_name'     => $last_name,
        'nickname'      => $first_name,
    );

    $user_id = wp_insert_user($user_data);
    wp_new_user_notification($user_id, $password);

    return $user_id;
}

/**
 * Handles the registration of a new user.
 *
 * Used through the action hook "login_form_register" activated on wp-login.php
 * when accessed through the registration action.
 */
function do_register_user()
{
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        $redirect_url = home_url('');

        if (!get_option('users_can_register')) {
            // Registration closed, display error
            $redirect_url = add_query_arg('register-errors', 'closed', $redirect_url);
        } else {
            $email = $_POST['email'];
            $first_name = sanitize_text_field($_POST['first_name']);
            $last_name = sanitize_text_field($_POST['last_name']);

            $result = register_user($email, $first_name, $last_name);

            if (is_wp_error($result)) {
                // Parse errors into a string and append as parameter to redirect
                $errors = join(',', $result->get_error_codes());
                $redirect_url = add_query_arg('register-errors', $errors, $redirect_url);
            } else {
                // Success, redirect to login page.
                $redirect_url = home_url('member-login');
                $redirect_url = add_query_arg('registered', $email, $redirect_url);
            }
        }

        wp_redirect($redirect_url);
        exit;
    }
}
add_action('login_form_register', 'do_register_user');
