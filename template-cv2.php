<?php
/* Template Name: cv2 */
require __DIR__ . '/vendor/autoload.php';
isNotLogged();
if ($_GET['id'] < 0 || $_GET['cv'] < 0) {
    wp_redirect(path('/?access=denied'));
}

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
//debug($getInfoWork);
$allCvId = $getCvRecruteur[$_GET['id']];
?>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #cv_2 h1,
        h3 {
            margin-top: 1rem;
        }

        #cv_2 .text_left_cv {
            margin-top: 10px;
            position: absolute;
            left: 175px;
            top: 25px;
        }

        #cv_2 .text_left_cv h3 {
            margin-bottom: 10px;
        }

        #cv_2 .img_cv1 {
            width: 150px;
            height: 200px;
            position: relative;
            margin-bottom: 10px;
        }

        #cv_2 .experience h2 {
            margin-top: 1rem;
            margin-bottom: 1rem;
            font-size: 14px;
        }

        #cv_2 .parcours h2 {
            margin-top: 1rem;
            margin-bottom: 1rem;
            font-size: 14px;
        }

        #cv_2 .description_post {
            margin-bottom: 3rem;
        }
    </style>
    <div id="cv_2">
        <div class="left">
            <div class="about">
                <img class="img_cv1" src="https://studiobontant.fr/images/galeries/Big/_DSC6716.jpg" alt="Logo Alexis BRIET">
                <div class="text_left_cv">
                    <h3><?= $allCvId->cv_title_work ?></h3>
                    <span><?= $allCvId->cv_surname .' '. $allCvId->cv_name ?></span>
                    <p>Né(e) le : <?= $allCvId->cv_birthday ?></p>
                    <p>Adresse : <?= $allCvId->cv_adress ?></p>
                    <p><?= $allCvId->cv_postal .', '. $allCvId->cv_city ?></p>
                    <p>Téléphone : <?= $allCvId->cv_phone ?></p>
                    <p>Email : <?= $allCvId->cv_email ?></p>
                    <p>Permis B</p>
                </div>
            </div>
            <p class="aboutmecv"><?= $allCvId->cv_presentation ?></p>
        </div>

        <div class="right">
            <h1>Mon expérience</h1>
            <?php for ($i = 0; $i <= count($getCvWork) - 1; $i++) { ?>
                <div class="experience">
                    <h2><?= $getCvWork[$i]->jobname ?></h2>
                    <?php $datejobStart = date_create($getCvWork[$i]->jobstart); ?>
                    <?php $datejobEnd = date_create($getCvWork[$i]->jobstart); ?>
                    <span><?= $getCvWork[$i]->jobcompany . ' | ' . date_format($datejobStart, 'F Y') . ' - ' . date_format($datejobStart, 'F Y') ?></span>
                    <p class="description_post"><?= $getCvWork[$i]->jobdescription ?></p>

                </div>
            <?php } ?>

            <h1>Mon parcours</h1>
            <?php for ($i = 0; $i <= count($getCvSchool) - 1; $i++) { ?>
                <div class="parcours">
                    <h2><?= $getCvSchool[$i]->schooljob ?></h2>
                    <?php $dateschoolStart = date_create($getCvSchool[$i]->schoolstart); ?>
                    <?php $dateschoolEnd = date_create($getCvSchool[$i]->schoolend); ?>
                    <span><?= $getCvSchool[$i]->schoolname . ' | ' . date_format($datejobStart, 'F Y') . ' - ' . date_format($dateschoolEnd, 'F Y') ?></span>
                    <p><?= $getCvSchool[$i]->schoolplace ?></p>
                    <p><?= $getCvSchool[$i]->schooldescription ?></p>
                </div>
            <?php } ?>
        </div>

        <h3>Mes compétences</h3>
        <ul class="skills">
            <?php for ($i = 0; $i <= count($getCvSkill) - 1; $i++) { ?>
                <li><?= $getCvSkill[$i]->skillname ?></li>
            <?php } ?>
        </ul>

        <h3>Mes loisirs</h3>
        <ul class="skills">
            <?php for ($i = 0; $i <= count($getCvHobbie) - 1; $i++) { ?>
                <li><?= $getCvHobbie[$i]->hobbiename ?></li>
            <?php } ?>
        </ul>
    </div>
<?php
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();
