<?php
/* Template Name: editProfil */
?>

<section id="profil">
    <div class="header">
    <?= get_header() ?>
        <h2>Mon espace</h2>
    </div>
    <div class="wrap3">
        <div class="titre">
            <h1>Bienvenue John sur votre espace recruteur/candidat</h1>
        </div>
        <div id="conteneurProfil">

            <div class="profilUser">
                <div class="imgProfil">
                    <img src=" <?php echo get_template_directory_uri() ?>/asset/img/lucImg.jpg" alt="img profil">
                </div>
                <div class="btnGroup">
                <div class="btnGroup3">
                    <a class="btnBlue" href="#">Modifier mon profil </a>
                </div>

                <div class="btnGroup4">
                    <a class="btnWhite" href="#">Accéder à la CVthèque</a>
                </div>
            </div>
            </div>

            <div class="formulaire">
                <form class="form" action="#" method="post">
                    <div class="two_input">
                        <div class="input_group">
                            <label for="js_surname">Nom : </label>
                            <input type="text" id="js_surname" name="surname" placeholder="Doe">
                            <span class="error" id="error_surname"></span>
                        </div>

                        <div class="input_group">
                            <label for="js_name">Prénom : </label>
                            <input type="text" id="js_name" name="name" placeholder="John" >
                            <span class="error" id="error_name"></span>
                        </div>
                    </div>

                        <div class="input_group">
                            <label for="js_birthday">Date de naissance</label>
                            <input type="date" id="js_birthday"  name="birthday">
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
                            <input type="text" id="js_city" name="city" placeholder="Rouen" >
                            <span class="error" id="error_city"></span>
                        </div>
                    </div>

                    <div class="input_group">
                        <label for="pays">Pays</label>
                        <input type="text" id="pays"  name="pays" placeholder="France" >
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    get_footer();
    ?>
</section>

