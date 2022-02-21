<?php
/* Template Name: HomePage */
?>

<section id="home">
    <?= get_header() ?>
    <div id="wraphome" class="wrap1">
        <div class="titre">
            <h1>Générer votre CV en ligne</h1>
        </div>

        <div class="btnGroup">
            <a class="btnTransparent" href="#" onclick="openNav()">S'inscrire/Se connecter</a>
        </div>

        <div class="btnGroup2">
            <a class="btnWhite" href="#"><i class="fa-solid fa-file-lines"></i>Générez son cv</a>
            <a class="btnBlue" href="#"><i class="fa-solid fa-user"></i>Espace Recruteur</a>
        </div>
    </div>

<?php
get_footer()?>

    <!-- The overlay -->
    <div id="myNav" class="displaynone">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div id="login_register" class="overlay-content">
            <div class="wrap">
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
                            <label for="register_email">Adresse mail</label>
                            <input type="text" name="register_email" id="register_email" placeholder="email@example.com" value="<?= recupInputValue('email') ?>">
                            <span id="errorEmailRegister" class="error"></span>
                        </div>
                        <div class="input_group">
                            <label for="register_pseudo">Nom d'utilisateur</label>
                            <input type="text" name="register_pseudo" id="register_pseudo" placeholder="JohnDoe80" value="<?= recupInputValue('pseudo') ?>">
                            <span id="errorPseudoRegister" class="error"></span>
                        </div>
                        <div class="two_input">
                            <div class="input_group">
                                <label for="register_password">Mot de passe</label>
                                <input type="password" name="register_password" id="register_password">
                                <span id="errorPasswordRegister" class="error"></span>
                            </div>
                            <div class="input_group">
                                <label for="confirm_register_password">Confirmer le mot de passe</label>
                                <input type="password" name="confirm_register_password" id="confirm_register_password">
                                <span id="errorPasswordRegister" class="error"></span>
                            </div>
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
                            <span class="error">test</span>
                        </div>
                        <div class="input_group">
                            <label for="login_password">Mot de passe</label>
                            <input type="text" name="login_password" id="login_password">
                            <span class="error">test</span>
                        </div>

                        <div class="btnForm">
                            <input type="submit" name="submitted_login" id="submitted_login" value="Se connecter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= get_footer() ?>

</section>

<script>
    function openNav() {
        document.getElementById("myNav").className = "overlay slide-in-left ";
        document.getElementById("wraphome").className = "displaynone";
        document.getElementById("footer").className = "displaynone";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").className = "overlay slide-out-left";
        setTimeout(function() {
            document.getElementById("myNav").className = "displaynone";
            document.getElementById("wraphome").className = "wrap1";
            document.getElementById("footer").className = "";
        }, 500)
    }
</script>