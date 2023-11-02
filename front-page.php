<?php get_header(); ?>
<main>

    <div class="home-container">
        <article class="projets">
            <div class="myself-section">
                <h1>Jinane Lotfi</h1>
                <p>je suis une web designer basée à san francisco</p>
                <div class="btn-card">
                    <a href="<?php the_permalink(); ?>" class="button">
                        <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                    </a>
                </div> 
            </div>
            <div class="line-projets-about-container">
                <div class="scrolling-text-container">
                    <marquee behavior="scroll" direction="left">Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong></marquee>
                </div>
                <div class="projets-about-section">                    
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
                    <div class="projets-section">
                        <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/my-works.png'; ?>" alt="pc">
                        <p>Portfolio</p>
                        <h2>Projets</h2>
                        <div class="btn-card">
                            <a href="<?php the_permalink(); ?>" class="button">
                                <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                            </a>
                        </div> 
                    </div>


                </div>
            </div>
            
        </article>
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
        <article class="contact-container">            
            <div class="contact-go-section">
                <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/my-works.png'; ?>" alt="pc">
                <h2>Travaillons ensembles</h2>
                <div class="btn-card">
                    <a href="<?php the_permalink(); ?>" class="button">
                        <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                    </a>
                </div> 

            </div>
        </article>


    </div>

</main>
<?php get_footer(); ?>
