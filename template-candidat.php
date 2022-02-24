<?php
if (!is_user_logged_in()) {
    wp_redirect(path('/?error=login'));
}
/* Template Name: EspaceCandidat */
//debug($getCvInfoGlobal);
//debug($getCvInfo);

?>


<div>
</div>
<section id="candidat">
    <div class="header">
        <?= get_header() ?>
        <h2>Espace Candidat</h2>
    </div>

    <div class="wrap3">
        <section id="candidat">
            <div class="search">
                <input type="text" id="input_candidat" onkeyup="searchKeyWordsCandidat()" placeholder="Tapez votre recherche">
            </div>
            <div class="titre">
                <h1>Résulat de votre recherche : ( mot clés entrés )</h1>
            </div>
            <div id="candidatcv">
                <ul id="CvUser">
                    <?php for ($i = 0; $i <= count($getCvInfo) - 1; $i++) { ?>
                        <div class="decritpion_cv_info">
                            <a href="<?= path('template-cv1') . '?id=' . $i . '&cv=' . $getCvInfo[$i]->id; ?>"><?= $getCvInfo[$i]->cv_title_work ?></a>
                            <p>De : <?= $getCvInfo[$i]->cv_surname . ' ' . $getCvInfo[$i]->cv_name ?></p>
                            <p>Le : <?= $getCvInfo[$i]->cv_created_at ?></p>
                        </div>
                    <?php } ?>
                </ul>
            </div>
    </div>

</section>
<section id="pagination_candidat">

    <div class="center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</section>
<?php
get_footer();
?>