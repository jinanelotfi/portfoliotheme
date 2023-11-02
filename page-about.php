<?php


get_header();
?>

<div class="about-container">

    <!-- SECTION 1 -->
        <article class="projets">
            <div class="myself-section">
                <h1>Jinane Lotfi</h1>
            </div>
            <div class="line-projets-about-container">
                <div class="projets-about-section">
                    <div class="about-image">
                        <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                        <h1>Un peu de moi</h1>
                        <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                    </div>                    
                    <div class="about-section">
                        <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/sign.png'; ?>" alt="signature">
                        <p>Plus à propos de moi</p>
                        <h2>Parcourt</h2>
                        <div class="btn-card">
                            <a href="<?php the_permalink(); ?>" class="button">
                                <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                            </a>
                        </div>                         
                    </div>
                </div>
            </div>
            
        </article>

        <!-- SECTION 2 -->
        <article class="contact-container">            
            <div class="contact-go-section">
                <h2>Expérience</h2>
                <span>                    
                    <p>2007 - 2017</p>
                    <h3>Framer & Designer</h3>
                    <p>nom de l'organisme</p>
                </span>

                <span>
                    <p>2007 - 2017</p>
                    <h3>Framer & Designer</h3>
                    <p>nom de l'organisme</p>
                </span>
                
            </div>
            <div class="contact-go-section">
            <h2>Formation</h2>
                <span>                    
                    <p>2007 - 2017</p>
                    <h3>Framer & Designer</h3>
                    <p>nom de l'organisme</p>
                </span>

                <span>
                    <p>2007 - 2017</p>
                    <h3>Framer & Designer</h3>
                    <p>nom de l'organisme</p>
                </span>
            </div>
        </article>

        <!-- SECTION 3 -->

        <article class="services-container">
            <div class="cv-competences-section">
                <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/gfonts.png'; ?>" alt="gglfonts">
                <p>PDF</p>
                <h2>Mon CV</h2>
                <div class="btn-card">
                    <a href="<?php the_permalink(); ?>" class="button">
                        <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                    </a>
                </div> 
            </div>
            <div class="social-section">
                <p>Compétences</p>
                <h2>Offres de service</h2>
                <div class="btn-card">
                    <a href="<?php the_permalink(); ?>" class="button">
                        <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                    </a>
                </div> 

            </div>
            <div class="contact-section">
                <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/my-works.png'; ?>" alt="pc">
                <p>On reste en contact</p>
                <h2>Mes réseaux</h2>
                <div class="btn-card">
                    <a href="<?php the_permalink(); ?>" class="button">
                        <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                    </a>
                </div> 

            </div>
        </article>


        


    </div>

<?php get_footer(); ?>