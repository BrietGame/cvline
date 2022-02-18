<?php
/* Template Name: GenerationCv */
?>

<section id="generate_cv">
    <div class="header">
        <?= get_header(); ?>
        <h2>Générer mon CV</h2>
    </div>

    <div class="wrap">
        <section id="fil_ariane">
            <div id="step" data-id="1" class="success">
                <span class="nb">1</span>
                <span class="text">Mes informations</span>
            </div>
            <div id="step" data-id="2" class="active">
                <span class="nb">2</span>
                <span class="text">Mes expériences</span>
            </div>
            <div id="step" data-id="3" class="">
                <span class="nb">3</span>
                <span class="text">Mes compétences</span>
            </div>
            <div id="step" data-id="4" class="">
                <span class="nb">4</span>
                <span class="text">Mes hobbies</span>
            </div>
            <div id="step" data-id="5" class="">
                <span class="nb">5</span>
                <span class="text">Mon parcours</span>
            </div>
            <div id="step" data-id="6" class="">
                <span class="nb">6</span>
                <span class="text">Récapitulatif</span>
            </div>
        </section>
        <section id="step_one" class="wrap1">
            <h2 class="title">Mes informations</h2>
            <form method="POST" id="global_cv">
                <div class="input_group">
                    <label for="js_post_search">Nom du poste recherché :</label>
                    <input type="text" id="js_post_search" name="post_search" placeholder="Developpeur Web">
                    <span class="error" id="error_js_post_search"></span>
                </div>
                <div class="input_group">
                    <label for="js_surname">Nom :</label>
                    <input type="text" id="js_surname" name="surname" placeholder="Doe">
                    <span class="error" id="error_surname"></span>
                </div>

                <div class="input_group">
                    <label for="js_name">Prénom :</label>
                    <input type="text" id="js_name" name="name" placeholder="John">
                    <span class="error" id="error_name"></span>
                </div>

                <div class="input_group">
                    <label for="js_email">Email :</label>
                    <input type="text" id="js_email" name="email" placeholder="exemple@gmail.com">
                    <span class="error" id="error_mail"></span>
                </div>


                <div class="input_group">
                    <label for="js_adress">Adresse :</label>
                    <input type="text" id="js_adress" name="adress" placeholder="8 rue exemple">
                    <span class="error" id="error_adress"></span>
                </div>


                <div class="two_input">
                    <div class="input_group">
                        <label for="js_postal">Code Postal</label>
                        <input type="number" id="js_postal" name="postal" placeholder="76100">
                        <span class="error" id="error_postal"></span>
                    </div>

                    <div class="input_group">
                        <label for="js_city">Ville :</label>
                        <input type="text" id="js_city" name="city" placeholder="Rouen">
                        <span class="error" id="error_city"></span>
                    </div>
                </div>

                <div class="two_input">
                    <div class="input_group">
                        <label for="js_birthday">Date de Naissance</label>
                        <input type="date" id="js_birthday" name="birthday">
                        <span class="error" id="error_birthday"></span>
                    </div>
                    <div class="input_group">
                        <label for="pet-select">Sélectionnez vot:</label>

                        <select name="pets" id="pet-select">
                            <option value="">--Please choose an option--</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="hamster">Hamster</option>
                            <option value="parrot">Parrot</option>
                            <option value="spider">Spider</option>
                            <option value="goldfish">Goldfish</option>
                        </select>
                    </div>
                </div>

                <div class="input_group">
                    <label for="js_phone">Telephone</label>
                    <input type="number" id="js_phone" name="phone" placeholder="Telephone : 06 ** ** ">
                    <span class="error" id="error_phone"></span>
                </div>

                <div class="input_group">
                    <label for="js_website">Site internet</label>
                    <input type="text" id="js_website" name="website" placeholder="www.example.com">
                    <span class="error" id="error_website"></span>
                </div>

                <div class="input_group">
                    <label for="js_about_me">A propos de moi</label>
                    <textarea type="text" id="js_about_me" name="about_me" placeholder="A propos de moi"></textarea>
                    <span class="error" id="error_about_me"></span>
                </div>

                <div class="btnForm">
                    <a href="#" class="btnBlack">Précédent</a>
                    <input class="btnBlue" type="submit" name="submitted" id="js_submitted_global" value="Suivant">
                </div>

            </form>
        </section>
        <section id="step_two" class="wrap1">
            <h2 class="title">Mes expériences</h2>
            <form method="POST" id="experience_cv">
                <div class="two_input">
                    <div class="input_group">
                        <label for="js_predate">Année de début</label>
                        <input type="date" id="js_predate" name="predate" placeholder="">
                        <span class="error" id="error_predate"></span>
                    </div>

                    <div class="input_group">
                        <label for="js_lastdate">Année de fin</label>
                        <input type="date" id="js_lastdate" name="lastdate" placeholder="">
                        <span class="error" id="error_lastdate"></span>
                        <label for="js_post_active"><input type="checkbox" id="js_post_active" name="js_post_active" value="Je suis à ce poste"> Je suis encore à ce poste</label>
                    </div>
                </div>

                <div class="input_group">
                    <label for="js_post_name">Nom du poste</label>
                    <input type="text" id="js_post_name" name="postname" placeholder="*Boulanger">
                    <span class="error" id="error_post_name"></span>
                </div>

                <div class="input_group">
                    <label for="js_entreprise_name">Nom de l'entreprise / Association</label>
                    <input type="text" id="js_entreprise_name" name="entreprisename" placeholder="Elsi & Franck">
                    <span class="error" id="error_entreprise_name"></span>
                </div>

                <div class="two_input">
                    <div class="input_group">
                        <label for="js_post_place">Lieu du poste</label>
                        <input type="text" id="js_post_place" name="postplace" placeholder="Cherbourg">
                        <span class="error" id="error_post_place"></span>
                    </div>
                    <div class="input_group">
                        <label for="js_teletravail_post"><input type="checkbox" id="js_teletravail_post" name="js_teletravail_post" value="J'étais en télétravail"> J'étais en télétravail</label>
                    </div>
                </div>

                <div class="input_group">
                    <label for="js_post_description">Description du poste</label>
                    <textarea id="js_post_description" name="postdescription" placeholder="Je sais faire du pain"></textarea>
                    <span class="error" id="error_post_description"></span>
                </div>

                <div class="btnForm">
                    <a href="#" class="btnBlack">Précédent</a>
                    <a href="#" class="btnBlack" id="addMoreExp">Ajouter un autre</a>
                    <input class="btnBlue" type="submit" name="submitted" id="js_submitted_experience" value="Suivant">
                </div>
            </form>
        </section>

        <section id="step_three" class="wrap1">
            <h2 class="title">Mes compétences</h2>
            <form method="POST" id="skill">
                <div id="todo" class="input_group">
                    <input type="text" id="js_search_skill" name="searchskill" placeholder="*Savoir faire, savoir être." onkeyup="searchSkill()">
                    <span class="error" id="error_search_skill"></span>
                    <ul id="result_search_skill">
                        <!-- Mettre dans une boucle -->
                        <li><a href="" id="bdd_item_skill" data-content="Adele">Adele</a></li>
                        <!-- Fin de la boucle -->
                    </ul>
                    <span onclick="newSkill()" class="addBtn">Ajouter cette compétence</span>

                    <span>Ma sélection</span>
                    <ul id="result_skills">
                    </ul>
                </div>

                <div class="btnForm">
                    <a href="#" class="btnBlack">Précédent</a>
                    <input type="submit" name="submit_skill" id="js_skill" value="Suivant">
                </div>
            </form>
        </section>

        <section id="step_four" class="wrap1">
            <h2 class="title">Mes loisirs</h2>
            <form method="POST" id="hobbie_cv">
                <div id="todo" class="input_group">
                    <input type="text" id="js_search_hobbie" name="hobbie" placeholder="Mon loisir" onkeyup="searchHobbie()">
                    <span class="error" id="error_hobbie"></span>
                    <ul id="result_search_hobbie">
                        <!-- Mettre dans une boucle -->
                        <li><a href="" id="bdd_item_hobbie" data-content="Jeux-vidéos">Jeux-vidéos</a></li>
                        <!-- Fin de la boucle -->
                    </ul>
                    <span onclick="newHobbie()" class="addBtn">Ajouter ce loisir</span>
                    <span>Ma sélection</span>
                    <ul id="result_hobbies">
                    </ul>
                </div>

                <div class="btnForm">
                    <a href="#" class="btnBlack">Précédent</a>
                    <input type="submit" name="submit_hobbie" id="js_hobbie_button" value="Suivant">
                </div>
            </form>
        </section>

        <section id="step_five" class="wrap1">
            <h2 class="title">Mon parcours</h2>
            <form method="POST" id="school_cv">

                <div class="two_input">
                    <div class="input_group">
                        <label for="js_school_start">Debut :</label>
                        <input type="date" id="js_school_start" name="school_start">
                        <span class="error" id="error_school_start"></span>
                    </div>
                    <div class="input_group">
                        <label for="js_school_end">Fin :</label>
                        <input type="date" id="js_school_end" name="school_end">
                        <span class="error" id="error_school_end"></span>
                    </div>
                </div>

                <div class="input_group">
                    <label for="js_school_formation">Intitulé :</label>
                    <input type="text" id="js_school_formation" name="school_formation">
                    <span class="error" id="error_school_formation"></span>
                </div>

                <div class="input_group">
                    <label for="js_school_name">Nom école :</label>
                    <input type="text" id="js_school_name" name="school_name">
                    <span class="error" id="error_school_name"></span>
                </div>

                <div class="two_input">
                    <div class="input_group">
                        <label for="js_school_place">Lieu :</label>
                        <input type="text" id="js_school_place" name="school_place">
                        <span class="error" id="error_school_place"></span>
                    </div>
                    <div class="input_group">
                        <label for="js_teletravail_school"><input type="checkbox" id="js_teletravail_school" name="js_teletravail_school" value="J'étais en télétravail"> J'étais en télétravail</label>
                    </div>
                </div>


                <div class="input_group">
                    <label for="js_school_description">Description :</label>
                    <textarea id="js_school_description" name="school_description" cols="30" rows="10"></textarea>
                    <span class="error" id="error_school_description"></span>
                </div>

                <a href="#" class="btnBlack" id="addMoreSchool">Ajouter</a>

                <div class="btnForm">
                    <a href="#" class="btnBlack">Précédent</a>
                    <input type="submit" name="submit_school" id="js_school_button" value="Suivant">
                </div>
            </form>
        </section>

        <a href="" class="btnBlue" id="final_submit">Générer son CV</a>
        <?php debug($_POST) ?>
    </div>
</section>


<?php
get_footer();
?>