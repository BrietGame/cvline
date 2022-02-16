<?php
/* Template Name: GenerationCv */
?>

<section id="generate_cv">
    <div class="header">
        <?= get_header(); ?>
        <h2>Générer mon CV</h2>
    </div>

    <div class="wrap1">
        <section id="fil_ariane">
            <div id="step" class="active">
                <span class="nb">1</span>
                <span class="text">Informations globales</span>
            </div>
        </section>
        <section id="step_one" class="wrap2">
            <form method="POST" id="global_cv">
                <label for="js_surname">Nom :</label>
                <input type="text" id="js_surname" name="surname" placeholder="Doe">
                <span class="error" id="error_surname"></span>

                <label for="js_name">Prénom :</label>
                <input type="text" id="js_name" name="name" placeholder="John">
                <span class="error" id="error_name"></span>

                <label for="js_email">Email :</label>
                <input type="text" id="js_email" name="email" placeholder="exemple@gmail.com">
                <span class="error" id="error_mail"></span>

                <label for="js_adress">Adresse :</label>
                <input type="text" id="js_adress" name="adress" placeholder="8 rue exemple">
                <span class="error" id="error_adress"></span>

                <label for="js_postal">Code Postal</label>
                <input type="number" id="js_postal" name="postal" placeholder="76100">
                <span class="error" id="error_postal"></span>

                <label for="js_city">Ville :</label>
                <input type="text" id="js_city" name="city" placeholder="Rouen">
                <span class="error" id="error_city"></span>

                <label for="js_birthday">Date de Naissance</label>
                <input type="date" id="js_birthday" name="birthday">
                <span class="error" id="error_birthday"></span>

                <label for="js_phone">Telephone</label>
                <input type="number" id="js_phone" name="phone" placeholder="Telephone : 06 ** ** ">
                <span class="error" id="error_phone"></span>

                <input type="submit" name="submitted" id="js_submitted_global">

            </form>
        </section>
        <section id="step_two">
            <form method="POST" id="experience_cv">
                <input type="date" id="js_predate" name="predate" placeholder="">
                <span class="error" id="error_predate"></span>

                <input type="date" id="js_lastdate" name="lastdate" placeholder="">
                <span class="error" id="error_lastdate"></span>

                <input type="text" id="js_post_name" name="postname" placeholder="*Boulanger">
                <span class="error" id="error_post_name"></span>

                <input type="text" id="js_entreprise_name" name="entreprisename" placeholder="Elsi & Franck">
                <span class="error" id="error_entreprise_name"></span>

                <input type="text" id="js_post_place" name="postplace" placeholder="Cherbourg">
                <span class="error" id="error_post_place"></span>

                <input type="text" id="js_post_description" name="postdescription" placeholder="Je sais faire du pain">
                <span class="error" id="error_post_description"></span>

                <input type="submit" name="submitted" id="js_submitted_experience">
            </form>
        </section>

        <section id="step_three">
            <form method="POST" id="skill">
                <input type="text" id="js_search_skill" name="searchskill" placeholder="*Savoir faire, savoir être.">
                <span class="error" id="error_search_skill"></span>
                <input type="submit" name="submit_skill" id="js_skill">

            </form>
        </section>

    </div>

</section>

<?php
get_footer();
?>