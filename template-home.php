<?php
/* Template Name: HomePage */
$errors_register = [];
if (!empty($_POST['submitted_register'])) {

    $register_email = cleanXss('register_email');
    $register_pseudo = cleanXss('register_pseudo');
    $register_password = cleanXss('register_password');
    $confirm_register_password = cleanXss('confirm_register_password');
    $role_choice = cleanXss('role');

    if (empty($role_choice)) {
        $errors_register['role'] = 'Veuillez définir votre status entre Candidat et Recruteur';
    }
    $errors_register = emailValidation($errors_register, $register_email, 'register_email');
    $errors_register = textValidation($errors_register, $register_pseudo, 'register_pseudo');
    $errors_register = textValidation($errors_register, $register_password, 'register_password');
    $errors_register = textValidation($errors_register, $confirm_register_password, 'confirm_register_password');


    if ($register_password == $confirm_register_password) {
        if (count($errors_register) === 0) {
            // Data sent to $_POST
            $userdata = [
                'user_login' => $register_pseudo,
                'user_pass'  => $register_password,
                'user_email' => $register_email,
                'role' => $role_choice,
            ];

            /**
             * It is not necessary to validate/clean the passed fields,
             * WP will do it by itself.
             */

            $user_id = wp_insert_user($userdata);

            if (!is_wp_error($user_id)) {
                // return true;
                wp_redirect(path('/'));
            } else {
                return $user_id->get_error_message();
            }
        }
    } else {
        $errors['password'] = 'Les mots de passe ne correspondent pas.';
    }
}

$errors_login = [];
if (!empty($_POST['submitted_login'])) {

    $login = cleanXss('login');
    $login_password = cleanXss('login_password');

    $errors_login = textValidation($errors_login, $login, 'login');
    $errors_login = textValidation($errors_login, $login_password, 'login_password');

    if (count($errors_login) === 0) {
        $credentials = array(
            'user_login' => $login,
            'user_password' => $login_password
        );
        wp_signon($credentials);
        wp_redirect(path('/'));
    }
}

$user = wp_get_current_user();
// debug($user)
?>

<section id="home">
    <?= get_header();
    // debug($_POST);
    ?>
    <div id="wraphome" class="wrap1">
        <div class="titre">
            <h1>Générez votre CV en ligne</h1>
        </div>

        <div class="btnGroup">
            <?php if (is_user_logged_in()) { ?>
                <a class="btnTransparent" id="modalBtn2">Accéder à mon espace</a>
            <?php } else { ?>
                <a class="btnTransparent" id="modalBtn2">Se créer un compte</a>
            <?php } ?>
        </div>

        <div class="btnGroup2">
            <?php if (is_user_logged_in() && $user->roles[0] == 'Recruteur') { ?>
                <a class="btnBlue" href="<?= path('espace-recruteur') ?>"><i class="fa-solid fa-user"></i>Espace Recruteur</a>
            <?php } else if (is_user_logged_in() && $user->roles[0] == 'Candidat') { ?>
                <a class="btnBlue" href="<?= path('espace-candidat') ?>"><i class="fa-solid fa-user"></i>Espace Candidat</a>
                <a class="btnWhite" href="<?= path('generer-cv') ?>"><i class="fa-solid fa-file-lines"></i>Générer mon cv</a>
            <?php } else if (is_user_logged_in() && $user->roles[0] != 'Candidat' && $user->roles[0] != 'Recruteur') { ?>
                <a class="btnBlue" href="<?= admin_url('/') ?>"><i class="fa-solid fa-user"></i>Administration</a>
                <a class="btnBlue" href="<?= path('espace-recruteur') ?>"><i class="fa-solid fa-user"></i>Espace Recruteur</a>
                <a class="btnBlue" href="<?= path('espace-candidat') ?>"><i class="fa-solid fa-user"></i>Espace Candidat</a>
            <?php } else if (!is_user_logged_in()) { ?>
                <a class="btnWhite" href="<?= path('generer-cv') ?>"><i class="fa-solid fa-file-lines"></i>Générer mon cv</a>
            <?php } ?>
        </div>
    </div>

    <?php
    get_footer() ?>


    <!-- The overlay -->
    <div id="myNav" class="displaynone">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" id="close" class="closebtn" onclick="closeRegisterMenu()">&times;</a>

        <!-- Overlay content -->
        <div id="login_register" class="overlay-content">
            <div class="wrap">
                <?php if (is_user_logged_in()) { ?>
                    <div class="container_islogged">
                        <div class="left">
                            <h2>Ravi de vous revoir <?php if (!empty($meta_user['first_name'][0])) {
                                                        echo $meta_user['first_name'][0];
                                                    } ?> !</h2>
                            <p>Bienvenue sur CVLine ! La solution à portée de main pour générer votre CV.</p>
                            <p>Grâce à notre système, vous n'avez qu'à simplement renseigner les informations dont on a besoin pour vous générer votre CV afin que vous puissez vous lancer dans le monde du travail !</p>
                            <a href="<?= path('logout') ?>" class="btnWhite">Se déconnecter</a>
                        </div>

                        <div class="right">
                            <a href="<?= path('mon-espace') ?>" class="btnwhite">Mon espace personnel</a>
                            <a href="<?= path('generer-cv') ?>" class="btnblue">Générer mon CV</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="left">
                        <h2>S'inscrire</h2>
                        <form action="" method="POST" novalidate id="loginForm">
                            <div class="two_input">
                                <div class="input_group_radio">
                                    <label class="container" for="candidat"> Candidat
                                        <input type="radio" id="candidat" name="role" value="Candidat">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="input_group_radio">
                                    <label class="container" for="recruteur"> Recruteur
                                        <input type="radio" id="recruteur" name="role" value="Recruteur">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input_group">
                                <span id="errorRoleRegister" class="error"><?= viewError($errors_register, 'role') ?></span>
                            </div>
                            <div class="input_group">
                                <label for="register_email">Adresse mail</label>
                                <input type="text" name="register_email" id="register_email" placeholder="email@example.com" value="<?= recupInputValue('register_email') ?>">
                                <span id="errorEmailRegister" class="error"><?= viewError($errors_register, 'register_email') ?></span>
                            </div>
                            <div class="input_group">
                                <label for="register_pseudo">Nom d'utilisateur</label>
                                <input type="text" name="register_pseudo" id="register_pseudo" placeholder="JohnDoe80" value="<?= recupInputValue('register_pseudo') ?>">
                                <span id="errorPseudoRegister" class="error"><?= viewError($errors_register, 'register_pseudo') ?></span>
                            </div>
                            <div class="input_group">
                                <label for="register_password">Mot de passe <i id="eye" class="far fa-eye" onclick="showHidePassword('register_password')"></i></label>
                                <input type="password" name="register_password" id="register_password">
                                <span id="errorPasswordRegister" class="error"><?= viewError($errors_register, 'register_password') ?></span>
                            </div>
                            <div class="input_group">
                                <label for="confirm_register_password">Confirmer le mot de passe <i id="eye" class="far fa-eye" onclick="showHidePassword('confirm_register_password')"></i></label>
                                <input type="password" name="confirm_register_password" id="confirm_register_password">
                                <span id="errorPasswordRegister" class="error"><?= viewError($errors_register, 'register_password') ?></span>
                            </div>

                            <div class="btnForm">
                                <input type="submit" name="submitted_register" id="submitted_register" value="S'inscrire">
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <h2>Se connecter</h2>
                        <form action="" method="POST" novalidate>
                            <div class="input_group">
                                <label for="login">Adresse mail ou nom d'utilisateur</label>
                                <input type="text" name="login" id="login" placeholder="email@example.com or JohnDoe80" value="">
                                <span class="error"><?= viewError($errors_login, 'login') ?></span>
                            </div>
                            <div class="input_group">
                                <label for="login_password">Mot de passe <i id="eye" class="far fa-eye" onclick="showHidePassword('login_password')"></i></label>
                                <input type="password" name="login_password" id="login_password">
                                <span class="error"><?= viewError($errors_login, 'login_password') ?></span>
                            </div>

                            <div class="btnForm">
                                <a href="" id="btnForgetPwd" class="btnWhite">Mot de passe oublié</a>
                                <input type="submit" name="submitted_login" id="submitted_login" value="Se connecter">
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- The overlay -->
    <div id="forgotpwd" class="displaynone">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" id="closeForgetPwd" class="closebtn">&times;</a>

        <!-- Overlay content -->
        <div id="forgot_password" class="overlay-content">
            <div class="wrap">
                <h2>Mot de passe oublié</h2>
                <div class="formMp">
                    <form class="form" action="#" method="post">
                        <div class="input_group">
                            <label for="email">Email : </label>
                            <input type="text" id="email" name="email" value="">
                        </div>
                        <div class="btnform">
                            <input type="submit" name="submitted_mp" id="mp-submitted" value="Récupèrer mon mot de passe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= get_footer() ?>

</section>

<script>
    function showHidePassword(id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>