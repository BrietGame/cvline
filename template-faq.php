<?php

/* Template Name: FAQ */?>

    <?php get_header(); ?>

 <?php
 $args = array(
         'post_type' => 'post',
         'posts_per_page' => 9,
 );

 $the_query = new WP_Query($args);

 ?>
    <section id="faq">
        <?php if ( $the_query->have_posts() ) {?>
        <button class="accordion">';
            <?=get_the_title();
            while ( $the_query->have_posts() ){
            $the_query->the_post(); ?>
            <div class="panel">
                <p><?=get_the_content(); ?></p>
            }

        }

            </div>
        </button>

</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }</script>

  <?php get_footer();?>