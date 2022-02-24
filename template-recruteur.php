<?php
/* Template Name: EspaceRecruteur */
isNotLogged();
get_header();

?>

<section id="recruteur">
    <div class="header">
        <h2>Espace Recruteur</h2>
    </div>
    <input type="text" id="input_recrut" onkeyup="searchKeyWordsRecruteur()" placeholder="Search for names..">

    <div id="recrutcv">
        <?php for ($i = 0; $i <= count($getCvRecruteur) - 1; $i++) { ?>
            <div class="decritpion_cv_info">
                <a href="<?= path('template-cv1') . '?id=' . $i . '&cv=' . $getCvRecruteur[$i]->id; ?>"><?= $getCvRecruteur[$i]->cv_title_work ?></a>
                <p><?= $getCvRecruteur[$i]->cv_surname . ' ' . $getCvRecruteur[$i]->cv_name ?></p>
                <p><?= $getCvRecruteur[$i]->cv_created_at ?></p>
            </div>
        <?php } ?>
    </div>

</section>

<?php
get_footer();
?>