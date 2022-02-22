<?php
require __DIR__ . '/vendor/autoload.php';
/* Template Name: Downloadcv */

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
?>
<style>
    #cv_2 {
        display: -webkit-box;
        /* wkhtmltopdf uses this one */
        display: flex;
        flex-flow: row nowrap;
    }

    #cv_2 .left {
        background-color: #141414;
        width: 30%;
    }

    #cv_2 .left .about {
        display: flex;
        flex-flow: column nowrap;
    }

    #cv_2 .left .skills {
        display: flex !important;
        color: red;
    }
</style>
<div id="cv_2">
    <div class="left">
        <div class="about">
            <img src="https://alexis-briet.fr/assets/img/AlexisBrietLogo.png" alt="Logo Alexis BRIET">
            <h3>Développeur Web</h3>
            <span>Alexis BRIET</span>
            <p>Je m'appelle Alexis et c'est mon anniversaire aujourd'hui !!!</p>
        </div>
        <ul class="skills">
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>CSS</li>
            <li>DomPDF :)</li>
        </ul>
    </div>
    <div class="right">
        <div class="experience">
            <h2>Développeur Web</h2>
            <span>Chez Need For School à Rouen - 2021 | 2024</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio nostrum, corporis rerum nam libero explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
        </div>
    </div>
</div>
<?php
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();
