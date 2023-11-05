<?php get_header(); ?>

<main class="single-projet">

    <?php while (have_posts()) : the_post(); ?>
        <div class="projet-details">
            <div class="info-block pin">
                <p><?php
                    $terms = get_the_terms(get_the_ID(), 'categorie');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            echo $term->name . ' ';
                            $categoryFound = $term->slug;
                        }
                    }
                    ?>
                </p>
                <div class="title-project-text">
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                    <h1><?php the_title(); ?></h1>
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                </div>                                     
            </div>
            <div class="projet-image pin">
                <?php the_post_thumbnail('full', ['class' => 'sim-image']); ?>
            </div>
            <div class="contexte pin">
                <h1>Contexte</h1>
                <p><?php echo get_field('contexte'); ?></p>
            </div>
            <div class="description pin">                
                <div class="text-description">
                    <h1>Description</h1>
                    <p><?php echo get_field('description'); ?></p>                    
                    <?php $github_url = get_field('lien_github'); ?>
                    <?php if ($github_url): ?>
                    <a href="<?php echo esc_url($github_url); ?>" class="button">
                        <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                    </a>
                    <?php endif; ?>
                </div>                
                <div class="list-elements">
                    <h2>Année</h2>
                    <p><?php echo get_field('annee'); ?></p>
                    <h2>Client</h2>
                    <p><?php echo get_field('client'); ?></p>
                    <h2>Technologies</h2>
                    <p>
                        <?php
                        $technologies = get_field('technologies_utilisees');
                        if ($technologies) {
                            foreach ($technologies as $technology) {
                                echo $technology . '<br>';
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="bottom-block">
            <div class="contact-single pin">
                <p>Envie de louer mes services ?</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="bouton-contact">Me Contacter</a>                
            </div>
            <div class="nav-links pin">
                <div class="nav-links-container">
                    <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="nav-link prev-link">
                        <span class="nav-thumbnail prev-img">
                            <?php echo get_the_post_thumbnail(get_adjacent_post(false, '', false), 'thumbnail'); ?>
                        </span>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg'; ?>" alt="chevron gauche" id="arrow-left">
                        <p>Précédent</p>
                    </a>
                    <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="nav-link next-link">
                        <span class="nav-thumbnail next-img">
                            <?php echo get_the_post_thumbnail(get_adjacent_post(false, '', true), 'thumbnail'); ?>
                        </span>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/chevron-right.svg'; ?>" alt="chevron droite" id="arrow-right">
                        <p>Suivant</p>
                    </a>
                </div>
            </div>
        </div>
        
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="bouton-portfolio">Revenir au Portfolio</a>
    <?php endwhile; ?>   

</main>

<?php get_footer(); ?>
