<!-- <?php
    if (isset($context) && $context === 'page_portfolio') {
        $link = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    } else {
        $image_url = get_permalink();
        $link = $image_url;
    }
?> -->

<div class="cards-right" >
    <!-- <div class="image-card"> -->
        <?php the_post_thumbnail('full', ['class' => 'sim-image']); ?>
    <!-- </div> -->
    <div class="info-block">
        <div class="info-card">
            <p><?php
            $terms = get_the_terms(get_the_ID(), 'categorie');
            if (!empty($terms)) {
                foreach ($terms as $term) {
                    echo $term->name . ' ';
                    $categoryFound = $term->slug;
                }
            }
            ?></p>
        <h1><?php the_title(); ?></h1> 
        </div>
        <div class="btn-card">
            <a href="<?php the_permalink(); ?>" class="button">
            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
            </a>
        </div>                         
    </div>
</div>