<?php
/* Template Name: editProfil */
$user = wp_get_current_user();
$meta_user = get_user_meta($user->ID);
// debug($user);
// debug($meta_user);
?>

<section id="profil">
    <div class="header">
        <?= get_header() ?>
        <h2>Mon espace</h2>
    </div>
    <div class="wrap3">
        <div class="titre">
            <h1>Bienvenue John sur votre espace <?= $user->roles[1] ?></h1>
        </div>
        <div id="conteneurProfil">

            <div class="profilUser">
                <div class="imgProfil">
                    <img src=" <?php echo get_template_directory_uri() ?>/asset/img/lucImg.jpg" alt="img profil">
                </div>
                <div class="btnGroup">
                    <div class="btnGroup3">
                        <a class="btnBlue" href="<?= admin_url('profile.php') ?>">Modifier mon profil </a>
                    </div>

                    <div class="btnGroup4">
                        <a class="btnWhite" href="">Accéder à la CVthèque</a>
                    </div>
                </div>
            </div>

            <div class="formulaire">
                <form class="form" action="#" method="post">
                    <div class="two_input">
                        <div class="input_group">
                            <label for="js_surname">Nom : </label>
                            <input type="text" id="js_surname" name="surname" value="<?= $meta_user['last_name'][0] ?>" disabled>
                        </div>

                        <div class="input_group">
                            <label for="js_name">Prénom : </label>
                            <input type="text" id="js_name" name="name" value="<?= $meta_user['first_name'][0] ?>" disabled>
                        </div>
                    </div>

                    <div class="input_group">
                        <label for="js_pseudo">Nom d'utilisateur : </label>
                        <input type="text" id="js_pseudo" name="pseudo" value="<?= $user->user_login ?>" disabled>
                    </div>

                    <div class="input_group">
                        <label for="js_email">Email : </label>
                        <input type="text" id="js_email" name="email" value="<?= $user->user_email ?>" disabled>
                    </div>

                    <div class="input_group">
                        <label for="js_created_at">Date de la création de votre compte : </label>
                        <input type="text" id="js_created_at" name="created_at" value="<?= $user->user_registered ?>" disabled>
                    </div>


                    <!-- <div class="input_group">
                        <label for="js_birthday">Date de naissance</label>
                        <input type="date" id="js_birthday" name="birthday">
                        <span class="error" id="error_birthday"></span>
                    </div>

                    <div class="input_group">
                        <label for="js_adress">Adresse</label>
                        <input type="text" id="js_adress" name="adress" placeholder="32 rue de la république">
                        <span class="error" id="error_adress"></span>
                    </div>
                    <div class="two_input">
                        <div class="input_group">
                            <label for="codePostal">Code Postal</label>
                            <input type="text" id="codePostal" placeholder="76100" name="codePostal">
                            <span class="error" id="error_postal"></span>
                        </div>
                        <div class="input_group">
                            <label for="js_city">Ville</label>
                            <input type="text" id="js_city" name="city" placeholder="Rouen">
                            <span class="error" id="error_city"></span>
                        </div>
                    </div>

                    <div class="input_group">
                        <label for="pays">Pays</label>
                        <input type="text" id="pays" name="pays" placeholder="France">
                    </div> -->
                </form>
            </div>
        </div>
    </div>


    <?php
    get_footer();
    ?>
</section>