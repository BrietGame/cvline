<?php
/* Template Name: EspaceRecruteur */
isNotLogged();
deniedAccessRole('Candidat');
get_header();

?>

<section id="recruteur">
    <div class="header">
        <h2>Espace Recruteur</h2>
    </div>
    <div class="wrap">
        <input type="text" id="input_recrut" onkeyup="searchKeyWordsRecruteur()" placeholder="Tapez votre recherche">

        <div id="recrutcv">
            <?php if (!empty($getCvInfo)) { ?>
                <?php for ($i = 0; $i <= count($getCvRecruteur) - 1; $i++) { ?>
                    <div class="decritpion_cv_info">
                        <a href="<?= path('template-cv1') . '?id=' . $i . '&cv=' . $getCvRecruteur[$i]->id; ?>"><?= $getCvRecruteur[$i]->cv_title_work ?></a>
                        <p><i class="fas fa-user"></i> : <?= $getCvRecruteur[$i]->cv_surname . ' ' . $getCvRecruteur[$i]->cv_name ?></p>
                        <p><i class="fas fa-calendar"></i> :<?php $dateCreate = date_create($getCvRecruteur[$i]->cv_created_at);
                                                            echo date_format($dateCreate, 'D d F à G:i'); ?></p>
                    </div>
            <?php }
            } else {
                echo '<p>Aucun CV ne correspond à votre recherche, <strong>Veuillez réessayer</strong></p>';
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>