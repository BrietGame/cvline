<?php
/* Template Name: cv2 */
require __DIR__ . '/vendor/autoload.php';
isNotLogged();

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #cv_2 .presentation1 {
        margin-top: 10px;
        position: absolute;
        left: 175px;
        top: 25px;

    }

    #cv_2 h1,
    h3 {
        margin-top: 1rem;
    }

    #cv_2 .presentation1 h3 {
        margin-bottom: 10px;
    }

    #cv_2 .photo {
        width: 100px;
        height: 150px;
        position: relative;
        margin-bottom: 40px;
    }

    #cv_2 .experience h2 {
        margin-top: 1rem;
        margin-bottom: 1rem;
        font-size: 14px;
    }

    #cv_2 .formation h2 {
        margin-top: 1rem;
        margin-bottom: 1rem;
        font-size: 14px;
    }

    #cv_2 .formation {
        margin-bottom: 2rem;
    }
</style>
<div id="cv_2">
    <div class="left">
        <div class="about">
            <img class="photo" src="https://anniversaire-celebrite.com/upload/250x333/lisa-simpson-250.jpg" alt="Logo Alexis BRIET">
            <div class="presentation1">
                <h3>Développeuse Web</h3>
                <span>Anais CRENIER</span>
                <p>29 ans</p>
                <p>107 rue de la roulotte</p>
                <p>88888 la </p>
                <p>06 87 88 55 99</p>
                <p>moi@hotmail.fr</p>
                <p>Permis B </p>
            </div>
        </div>
        <div class="presentation2">
            <p>je m'apelle anais crenier,Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime corrupti perspiciatis quae deserunt! Odio
                nostrum, corporis rerum nam libero
                explicabo laudantium voluptas exercitationem itaque cum amet enim. Quas, ex.</p>
        </div>
    </div>

    <div class="right">
        <h1>Mon expérience</h1>
        <div class="experience">
            <h2>Spécialiste en marketing numérique expérimentée Agence de publicité MédiaPub</h2>
            <span>d'août 2018 à aujourd'hui</span>
            <p class="description">
                Mise en œuvre de campagnes de marketing et de publicité multicanales.
                Responsable de la gestion de campagnes de marketing de B2B et B2C pour les clients,
                allant de la planification à l'optimisation.</p>
        </div>
        <div class="experience">
            <h2>Spécialiste en marketing numérique Galerie d'art Numérix</h2>
            <span>janvier 2012 à août 2018</span>
            <p class="description">
                Développement et mise en œuvre de stratégies de marketing numérique.</p>
        </div>
        <h1>Formation</h1>
        <div class="formation">
            <h2>Université de Condorcet</h2>
            <span> 2017 Major de promotion</span>
            <p>Maîtrise en marketing numérique</p>
        </div>
        <div class="formation">
            <h2>Institut de Sciences Politiques à Aix-en-Provence</h2>
            <span> Licence de marketing 2010</span>
            <p>Maîtrise en marketing numérique</p>
        </div>
    </div>
    <h3>SKILLS</h3>
    <ul class="skills">
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
        <li>SQL</li>
    </ul>
    <h3>Mes loisirs</h3>
    <ul class="skills">
        <li>Basket ball</li>
        <li>Boxe</li>
        <li>Krav maga</li>
        <li>Jeux video</li>
    </ul>
</div>
<?php
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output();
