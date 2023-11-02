<?php


get_header();
?>

<div class="page-portfolio">

    <?php
        // WP_Query pour afficher les éléments du CPT "projet"
        $args = array(
            'post_type' => 'projet',
            'posts_per_page' => 6,
        );

        $query = new WP_Query($args);
    ?>
<p>Tous les projets</p>

        <?php if ($query->have_posts()) : ?>
            <div class="cards-container">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php get_template_part('templates/project-card'); ?> 
                
                <?php endwhile ?>
            </div>
        <?php else : ?>
            <h1>Pas de projet</h1>    
        <?php endif; ?>
        <?php wp_reset_postdata() ?>



    <div class="side-cards-container">
        <div class="cards-left">

        </div>
    </div>
    <div class="all-projects-container">
        <div class="all-projects">

        </div>
        <div class="cards-right">

        </div>
    </div>




    <!-- <
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?> -->
</div>

<?php get_footer(); ?>