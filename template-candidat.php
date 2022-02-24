<?php
/* Template Name: EspaceCandidat */
isNotLogged();
deniedAccessRole('Recruteur');
//debug($getCvInfoGlobal);
//debug($getCvInfo);
get_header();

?>


<div>
</div>
<section id="candidat">
    <div class="header">
        <h2>Espace Candidat</h2>
    </div>

    <div class="wrap">
        <div class="search">
            <input type="text" id="input_candidat" onkeyup="searchKeyWordsCandidat()" placeholder="Tapez votre recherche">
        </div>
        <div class="titre">
            <h1>Résulat de votre recherche :</h1>
        </div>
        <div id="candidatcv">
            <ul id="CvUser">
                <?php if (!empty($getCvInfo)) { ?>
                    <?php for ($i = 0; $i <= count($getCvInfo) - 1; $i++) { ?>
                        <div class="decritpion_cv_info">
                            <a href="<?= path('template-cv1') . '?id=' . $i . '&cv=' . $getCvInfo[$i]->id; ?>"><?= $getCvInfo[$i]->cv_title_work ?></a>
                            <p><i class="fas fa-user"></i> : <?= $getCvInfo[$i]->cv_surname . ' ' . $getCvInfo[$i]->cv_name ?></p>
                            <p><i class="fas fa-calendar"></i> : <?php $dateCreate = date_create($getCvInfo[$i]->cv_created_at);
                                                                    echo date_format($dateCreate, 'D d F à G:i') ?></p>
                        </div>
                <?php }
                } else {
                    echo '<p>Vous n\'avez pas de CV de généré sur votre espace.</p>
                        <a class="btnBlue" href="' . path('/generer-cv') . '">Générer un CV</a>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php
get_footer();
?>