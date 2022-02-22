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
        <div class="search">
            <input type="search" id="search" name="search">
        </div>
        <div class="titre">
            <h1>Résulat de votre recherche : ( mot clés entrés )</h1>
        </div>
        <div id="conteneurCandidat">

            <div class="CvUser">
                <div class="btnGroup">
                    <div class="btnGroup3">
                        <a class="btnWhite" href="#">Page précédente </a>
                    </div>

                    <div class="btnGroup4">
                        <a class="btnBlue" href="">Page suivante</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    get_footer();
    ?>
</section>
