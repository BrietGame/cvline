<?php
/* Template Name: editProfil */
isNotLogged();
get_header();
$user = wp_get_current_user();
$meta_user = get_user_meta($user->ID);
// debug($user);
// debug($meta_user);
?>

<section id="profil">
    <div class="header">
        <h2>Mon espace</h2>
    </div>
    <div class="wrap">
        <div class="titre">
            <h1>Bienvenue <?php if (!empty($meta_user['first_name'][0])) {
                                echo $meta_user['first_name'][0];
                            } else {
                                echo '';
                            } ?> sur votre espace <?php if (!empty($user->roles[0])) {
                                                                                                                    echo $user->roles[0];
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                } ?></h1>
        </div>
        <div id="conteneurProfil">
            <div class="profilUser">
                <div class="imgProfil">
                    <img src=" <?php echo get_template_directory_uri() ?>/asset/img/lucImg.jpg" alt="img profil">
                </div>
                <div class="btnGroup">
                    <a class="btnBlue" href="<?= admin_url('profile.php') ?>">Modifier mon profil </a>
                    <a class="btnWhite" href="<?= path('espace-recruteur') ?>">Accéder à la CVthèque</a>
                </div>
            </div>

            <div class="formulaire">
                <form class="form" action="#" method="post">
                    <div class="two_input">
                        <div class="input_group">
                            <label for="js_surname">Nom : </label>
                            <input type="text" id="js_surname" name="surname" value="<?php if (!empty($meta_user['last_name'][0])) {
                                                                                            echo $meta_user['last_name'][0];
                                                                                        } else {
                                                                                            echo 'Rien n\'a été renseigné...';
                                                                                        } ?>" disabled>
                        </div>

                        <div class="input_group">
                            <label for="js_name">Prénom : </label>
                            <input type="text" id="js_name" name="name" value="<?php if (!empty($meta_user['first_name'][0])) {
                                                                                    echo $meta_user['first_name'][0];
                                                                                } else {
                                                                                    echo 'Rien n\'a été renseigné...';
                                                                                } ?>" disabled>
                        </div>
                    </div>

                    <div class="input_group">
                        <label for="js_pseudo">Nom d'utilisateur : </label>
                        <input type="text" id="js_pseudo" name="pseudo" value="<?php if (!empty($user->user_login)) {
                                                                                    echo $user->user_login;
                                                                                } else {
                                                                                    echo 'Rien n\'a été renseigné...';
                                                                                } ?>" disabled>
                    </div>

                    <div class="input_group">
                        <label for="js_email">Email : </label>
                        <input type="text" id="js_email" name="email" value="<?php if (!empty($user->user_email)) {
                                                                                    echo $user->user_email;
                                                                                } else {
                                                                                    echo 'Rien n\'a été renseigné...';
                                                                                } ?>" disabled>
                    </div>

                    <div class="input_group">
                        <label for="js_created_at">Date de la création de votre compte : </label>
                        <input type="text" id="js_created_at" name="created_at" value="<?php if (!empty($user->user_registered)) {
                                                                                            echo $user->user_registered;
                                                                                        } else {
                                                                                            echo 'Rien n\'a été renseigné...';
                                                                                        } ?>" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    get_footer();
    ?>
</section>