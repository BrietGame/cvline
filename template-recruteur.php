<?php
if (!is_user_logged_in()) {
    wp_redirect(path('/'));
}
get_header();
/* Template Name: EspaceRecruteur */
?>

<div>
    <h1>EspaceRecruteur</h1>
</div>
<section id="recruteur">
    <input type="text" id="input_recrut" onkeyup="myFunction()" placeholder="Search for names..">

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
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('input_recrut');
            filter = input.value.toUpperCase();
            div = document.getElementById("recrutcv");
            li = div.getElementsByClassName('decritpion_cv_info');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }</script>

<?php
get_footer();
?>