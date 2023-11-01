<?php get_header(); ?>
<main>

    <div class="gallery">
        <?php
        // WP_Query pour afficher les éléments du CPT "photo"
        $args = array(
            'post_type' => 'projet',
            'posts_per_page' => 6,
        );

        $query = new WP_Query($args);
        ?>

        <!-- Section Hero -->
        <!-- < get_template_part('templates/hero'); ?> -->
        <!-- Fin Section Hero -->

        <!-- Section Filtres -->                
        <!-- < get_template_part('templates/filters'); ?>         -->
        <!-- Fin section Filtres -->


        <?php if ($query->have_posts()) : ?>
            <div class="gallery-container" id="ajax_return">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php get_template_part('templates/post-boucle'); ?>               
                <?php endwhile ?>
            </div>
        <?php else : ?>
            <h1>Pas d'article</h1>    
        <?php endif; ?>
        <?php wp_reset_postdata() ?>

        <!-- bouton Chargez plus -->
        <?php get_template_part('templates/load-more'); ?>
        
    </div>

</main>
<?php get_footer(); ?>
