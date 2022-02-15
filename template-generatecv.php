<?php
get_header();
/* Template Name: GenerationCv */
?>

    <div>
        <h1>GenerationCv</h1>
    </div>

<form method="POST" id="global_cv">
    <input type="text" id="js_surname" name="surname" placeholder="Doe">
    <span class="error" id="error_surname"></span>

    <input type="text" id="js_name" name="name" placeholder="John">
    <span class="error" id="error_name"></span>

    <input type="text" id="js_email" name="email" placeholder="exemple@gmail.com">
    <span class="error" id="error_mail"></span>

    <input type="text" id="js_adress" name="adress" placeholder="8 rue exemple">
    <input type="number" id="js_postal" name="postal" placeholder="76100">
    <input type="text" id="js_city" name="city" placeholder="Rouen">

    <input type="submit" name="submitted" id="js_submitted_global">

</form>



<?php
get_footer();
?>