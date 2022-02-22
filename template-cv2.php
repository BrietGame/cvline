<?php
require __DIR__ . '/vendor/autoload.php';
/* Template Name: cv2 */

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
?>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #cv_2 {
            display: -webkit-box;
            /* wkhtmltopdf uses this one */
            display: flex;
            flex-flow: row nowrap;

        }

        #cv_2 .left {
        }

        #cv_2 .left .about {
            display: flex;
            flex-flow: column nowrap;
        }
        #cv_2 .left .about .photo img{
            width: 100px;
        }
        #cv_2 .left .skills {
            display: flex !important;
            color: red;
        }
        #cv_2 .left .presentation2{
            width: 50%;
        }
        #cv_2 .right{
        }
        #cv_2 .right .experience{
            width: 50%;
            position: absolute;
            margin-left: 3rem;
            display: flex;

        }
    </style>
    <div id="cv_2">
        <div class="left">
            <div class="about">
                <div class="photo">
                 <img src="https://anniversaire-celebrite.com/upload/250x333/lisa-simpson-250.jpg" alt="Logo Alexis BRIET">
                </div>
                 <div class="présentation1">
                <h3>Développeuse Web</h3>
                <span>Anais CRENIER</span>
                <p>29 ans</p>
                <p>107 rue de la roulotte</p>
                 <p>88888 la </p>
                 <p>06 87 88 55 99</p>
                 <p>moi@hotmail.fr</p>
                  <p>Permis B </p>
                </div>
                <div class="presentation2">
                    je m'apelle anais crenier,Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio
                    nostrum, corporis rerum nam libero
                    explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.
                </div>

            </div>

        </div>
        <div class="right">
            <div class="experience">
                <h2>Développeur Web</h2>
                <span>Chez Need For School à Rouen - 2021 | 2024</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
            </div>
        </div>
        <ul class="skills">
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>SQL</li>
        </ul>
    </div>
<?php
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();
