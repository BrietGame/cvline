<?php
/* Template Name: Cgu */
?>

<?= get_header() ?>


<div id="cgu">
    <div class="wrap">
        <h2 class="title"><?= get_the_title(); ?></h2>
        <!-- CONTENU -->
        <?= get_the_content(); ?>
    </div>
</div>


<?= get_footer() ?>