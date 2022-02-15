<?php
get_header();
/* Template Name: Login */
?>

<div class="container">
    <div class="register">
        <h2>S'inscrire</h2>
        <form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
            <div class="input_group username">
                <label for="user_login"><?php _e('Username'); ?>: </label>
                <input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="101" />
            </div>
            <div class="input_group password">
                <label for="user_email"><?php _e('Your Email'); ?>: </label>
                <input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" size="25" id="user_email" tabindex="102" />
            </div>
            <div class="login_fields">
                <?php do_action('register_form'); ?>
                <input type="submit" name="user-submit" value="<?php _e('Sign up!'); ?>" class="user-submit" tabindex="103" />
                <?php $register = $_GET['register'];
                if ($register == true) {
                    echo '<p>Check your email for the password!</p>';
                } ?>
                <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
                <input type="hidden" name="user-cookie" value="1" />
            </div>
        </form>
    </div>
    <div class="login">
        <h2>Se connecter</h2>
        <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
            <div class="input_group username">
                <label for="user_login"><?php _e('Username'); ?>: </label>
                <input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" placeholder="email@email.com" size="20" id="user_login" tabindex="11" />
            </div>
            <div class="input_group password">
                <label for="user_pass"><?php _e('Password'); ?>: </label>
                <input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
            </div>
            <div class="login_fields">
                <div class="rememberme">
                    <label for="rememberme">
                        <input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Remember me
                    </label>
                </div>
                <?php do_action('login_form'); ?>
                <input type="submit" name="user-submit" value="<?php _e('Login'); ?>" tabindex="14" class="user-submit" />
                <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                <input type="hidden" name="user-cookie" value="1" />
            </div>
        </form>
    </div>
</div>



<?php
get_footer();
?>