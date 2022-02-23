<?php
require __DIR__ . '/vendor/autoload.php';
/* Template Name: Cv 1 */

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
//debug($getInfoWork);

$singleCvID = $getCvInfo[$_GET['id']];

?>
    <style>

        * {
            margin: 0;
            padding: 0;
        }
        #cv_2 h1, h3{
            margin-top: 1rem;
        }

        #cv_2 .text_left_cv{
            margin-top: 10px;
            position: absolute;
            left: 175px;
            top: 25px;
        }

        #cv_2 .text_left_cv h3{
        margin-bottom: 10px;
        }

        #cv_2 .img_cv1 {
            width: 150px;
            height: 200px;
            position: relative;
            margin-bottom: 10px;
        }
        #cv_2 .experience h2{
            margin-top: 1rem;
            margin-bottom: 1rem;
            font-size: 14px;
        }
        #cv_2 .parcours h2{
            margin-top: 1rem;
            margin-bottom: 1rem;
            font-size: 14px;
        }

        #cv_2 .description_post{
            margin-bottom: 3rem;
        }

    </style>
    <div id="cv_2">
        <div class="left">
            <div class="about">
                <img class="img_cv1" src="https://studiobontant.fr/images/galeries/Big/_DSC6716.jpg" alt="Logo Alexis BRIET">
                <div class="text_left_cv">
                <h3><?= $singleCvID->cv_title_work ?></h3>
                <span><?= $singleCvID->cv_surname .' '. $singleCvID->cv_name ?></span>
                    <p>Né(e) le : <?= $singleCvID->cv_birthday ?></p>
                    <p>Adresse : <?= $singleCvID->cv_adress ?></p>
                    <p><?= $singleCvID->cv_postal .', '. $singleCvID->cv_city ?></p>
                    <p>Téléphone : <?= $singleCvID->cv_phone ?></p>
                    <p>Email : <?= $singleCvID->cv_email ?></p>
                    <p>Permis B</p>
                </div>
            </div>
            <p class="aboutmecv"><?= $singleCvID->cv_presentation ?></p>
        </div>
        <div class="right">
            <h1>Mon expérience</h1>
            <div class="experience">
                <h2>Vendeur</h2>
                <span>Chez H&M à Rouen - 2019 | 2020</span>
                <p class="description_post">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
            </div>
            <div class="experience">
                <h2>Vendeur de Tacos</h2>
                <span>Chez El Tacos au Mexique - 2015 | 2019</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
            </div>
            <h1>Mon parcours</h1>
            <div class="parcours">
                <h2>Développeur Web</h2>
                <span>Chez Need For School à Rouen - 2021 | 2024</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
            </div>
            <div class="parcours">
                <h2>Technicien d'études du batiment</h2>
                <span>Chez le Corbusier à SER - 2020 | 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
            </div>
        </div>
        <h3>Mes compétences</h3>
        <ul class="skills">

            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>CSS</li>
        </ul>
        <h3>Mes loisirs</h3>
        <ul class="skills">

            <li>Jeux vidéos</li>
            <li>Adele</li>
            <li>Couper du bois</li>
            <li>Lire</li>
        </ul>
    </div>
<?php
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();