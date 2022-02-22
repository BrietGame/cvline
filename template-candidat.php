<?php
if (!is_user_logged_in()) {
    wp_redirect(admin_url() . '../login');
}
/* Template Name: EspaceCandidat */
?>


<section id="espaceCandidat">
    <div class="header">
        <?= get_header() ?>
        <h2>Espace candidat</h2>
    </div>
    <div class="wrap3">
        <section id="candidat">
            <div class="search">
                <input type="text" id="input_candidat" onkeyup="myFunction()" placeholder="Tapez votre recherche">
            </div>
            <div class="titre">
                <h1>Résulat de votre recherche : ( mot clés entrés )</h1>
            </div>
            <div id="conteneurCandidat">

                <ul id="CvUser">
                    <div class="decritpion_cv_info">
                        <a href="#">Poste</a>
                        <p>Nom Prénom</p>
                        <p>Description</p>
                    </div>
                </ul>
            </div>
    </div>
    </div>

    <?php
    get_footer();
    ?>
</section>
