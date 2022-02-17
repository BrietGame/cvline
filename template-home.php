<?php
/* Template Name: HomePage */
?>

<div class="conteneur">

    <div class="wrap2">

        <div class="titre">
            <h1>Générer votre CV en ligne</h1>
        </div>

        <div class="btnGroup">
            <a class="btnTransparent" href="#">S'inscrire/Se connecter</a>
        </div>

        <div class="btnGroup2">
            <a class="btnWhite" href="#">Générez son cv</a>
            <a class="btnBlue" href="#">Espace Recruteur</a>
        </div>
    </div>

</div>


<?php
get_footer();
?>

<section id="home">
    <?= get_header() ?>
    <div class="wrap1">
        <div class="titre">
            <h1>Générer votre CV en ligne</h1>
        </div>

        <div class="btnGroup">
            <a class="btnTransparent" href="#">S'inscrire/Se connecter</a>
        </div>

        <div class="btnGroup2">
            <a class="btnWhite" href="#"><i class="fa-solid fa-file-lines"></i>Générez son cv</a>
            <a class="btnBlue" href="#"><i class="fa-solid fa-user"></i>Espace Recruteur</a>
        </div>
    </div>
    <?= get_footer() ?>
</section>

