<?php
get_header();
/* Template Name: editProfil */
?>
<div class="wrap3">
    <div class="titre">
        <h1>Mon espace</h1>
    </div>

    <div class="bienvenue">
        <p>Bienvenue John sur votre espace recruteur/candidat</p>
    </div>

<div id="conteneurProfil">

    <div class="profil">
        <div class="imgProfil">
            <img src=" <?php echo get_template_directory_uri() ?>/asset/img/lucImg.jpg" alt="img profil">
        </div>

        <div class="btnGroup3">
            <a class="btnBlue" href="#">Modifier mon profil </a>
        </div>
        <div class="btnGroup4">
            <a class="btnWhite" href="#">Accéder à la CVthèque</a>
        </div>
    </div>

    <div class="formulaire">
        <form class="form" action="#" method="post">
            <div class="nomEtPrenom">
                <label for="nom">Nom</label>
                <input type="text" id="name" placeholder="Doe" name="Nom">

                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" placeholder="Doe" name="Prenom">
            </div>

            <div class="dateNaissance">
                <label for="bday">Date de naissance</label>
                <input type="text" id="dateDeNaissance"  placeholder="DD/MM/YYYY" name="DatedeNaissance">
            </div>
            <div class="adresse">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse"  placeholder="32 rue de la république" name="adresse">
            </div>

            <div class="codePostalEtVille">
                <label for="codePostal">Code Postal</label>
                <input type="text" id="codePostal" placeholder="76100" name="codePostal">

                <label for="ville">Ville</label>
                <input type="text" id="ville" placeholder="Rouen" name="ville">
            </div>
            <div class="pays">
                <label for="pays">Pays</label>
                <input type="text" id="pays"  placeholder="France" name="pays">
            </div>
        </form>
    </div>s
</div>







</div>



<?php
get_footer();
?>
