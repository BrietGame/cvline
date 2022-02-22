<?php
if (!is_user_logged_in()) {
    wp_redirect(path('/'));
}
/* Template Name: EspaceRecruteur */
?>

<section id="recruteur">
    <div class="header">
        <?= get_header() ?>
        <h2>Espace Recruteur</h2>
    </div>
    <input type="text" id="input_recrut" onkeyup="searchKeyWordsRecruteur()" placeholder="Search for names..">

    <div id="recrutcv">
        <div class="decritpion_cv_info">
            <a href="#">Poste</a>
            <p>Nom Prénom</p>
            <p>Description</p>
        </div>
        <div class="decritpion_cv_info">
            <a href="#">Poste</a>
            <p>Nom Prénom</p>
            <p>Description</p>
        </div>
        <div class="decritpion_cv_info">
            <a href="#">Poste</a>
            <p>Nom Prénom</p>
            <p>Description</p>
        </div>

    </div>

</section>
<section id="pagination_recrut">

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