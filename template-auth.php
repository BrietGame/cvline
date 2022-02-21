<?php
get_header();
/* Template Name: Auth */
?>

<div class="split left slide-in-right">
    <div class="centered">
        <img src="img_avatar2.png" alt="Avatar woman">
        <h2>S'inscrire</h2>
        <form method="post" action="" class="wp-user-form">
            <div class="input_group username">
                <label for="user_login"><?php _e('Username'); ?>: </label>
                <input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" placeholder="Entrer votre nom d'utilisateur" size="20" id="user_login" tabindex="101" />
            </div>
            <div class="input_group password">
                <label for="user_email"><?php _e('Your Email'); ?>: </label>
                <input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" placeholder="Entrer votre adresse mail" size="25" id="user_email" tabindex="102" />
            </div>
            <div class="input_group checkbox">
                <input type="checkbox" name="cgu" id="cgu">
                <label for="cgu">J'accepte les Conditions Générales d'Utilisations</label>
            </div>
            <div class="login_fields">
                <?php do_action('register_form'); ?>
                <input type="submit" name="user-submit" class="btnWhite" value="<?php _e('S\'inscrire'); ?>" class="user-submit" tabindex="103" />
                <?php $register = $_GET['register'];
                if ($register == true) {
                    echo '<p>Veuillez regarder votre boîte mail pour générer votre mot de passe.</p>';
                } ?>
                <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
                <input type="hidden" name="user-cookie" value="1" />
            </div>
        </form>
    </div>
</div>

<div class="split right">
    <div class="centered">
        <img src="img_avatar.png" alt="Avatar man">
        <h2>Se connecter</h2>
        <form method="post" action="" class="wp-user-form">
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
                <input type="submit" name="user-submit" class="btnBlue" value="<?php _e('Login'); ?>" tabindex="14" class="user-submit" />
                <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                <input type="hidden" name="user-cookie" value="1" />
            </div>
        </form>
        <a href="http://localhost/cv_theque/wp-login.php?action=lostpassword">Mot de passe oublié ?</a>
    </div>
</div>



<?php
get_footer();
?>