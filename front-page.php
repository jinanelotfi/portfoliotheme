<?php get_header(); ?>
<main>

    <div class="home-container">
        <article class="projets">
            <div class="myself-section">
                <p>Developpeuse WEB</p>
                <h1>Jinane Lotfi</h1>
                <div class="description-self-container">
                    <p>Développeuse Front-end spécialisée dans la création de sites web Wordpress. Ma mission consiste à concevoir pour vous des sites fonctionnels et esthétiques.</p>
                    <div class="btn-card">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="button">
                            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                        </a>
                    </div> 
                </div>
                
            </div>
            <div class="line-projets-about-container">
                <div class="scrolling-text-container">
                    <marquee behavior="scroll" direction="left">Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong>Derniers projets à la <strong>une. </strong></marquee>
                </div>
                <div class="projets-about-section">                    
                    <div class="about-section">
                        <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/sign.png'; ?>" alt="signature">
                        <div class="side-card">
                            <span>
                                <p>Plus à propos de moi</p>
                                <h2>Parcourt</h2>
                            </span>                            
                            <div class="btn-card">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="button">
                                    <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                                </a>

                            </div>   
                        </div>                      
                    </div>
                    <div class="projet-section">
                        <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/my-works.png'; ?>" alt="signature">
                        <div class="side-card">
                            <span>
                                <p>Mes projets</p>
                                <h2>Portfolio</h2>
                            </span>                            
                            <div class="btn-card">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="button">
                                    <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                                </a>
                            </div>   
                        </div>                      
                    </div>


                </div>
            </div>
            
        </article>
        <article class="services-container">
            <div class="cv-competences-section">
                <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/sign.png'; ?>" alt="signature">
                <div class="side-card">
                    <span>
                        <p>PDF</p>
                        <h2>Mon CV à télécharger</h2>
                    </span>                            
                    <div class="btn-card">
                        <a href="<?php echo esc_url(get_template_directory_uri() . './assets/uploads/cv-jinane-digital.pdf'); ?>" class="button" download>
                            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                        </a>
                    </div>   
                </div>                      
            </div>

            <div class="competences-section">
                <span class="competences-icones">
                    <i class="fa-brands fa-square-js" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-html5" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-css3-alt" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-php" style="color: #ffffff;"></i>                
                </span>
                <div class="side-card">
                    <span>
                        <p>compétences</p>
                        <h2>Offres de service</h2>
                    </span>                            
                    <div class="btn-card">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="button">
                            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                        </a>
                    </div>   
                </div>                      
            </div>

            <div class="contact-section">
                <span class="image-social">
                    <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/linkedin.svg'; ?>" alt="linkedin">
                    <img class="image-sign" src="<?php echo get_template_directory_uri() . './assets/images/github.svg'; ?>" alt="github">
                </span>                
                <div class="side-card">
                    <span>
                        <p>Mes réseaux</p>
                        <h2>On reste en contact</h2>
                    </span>                            
                    <div class="btn-card">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button">
                            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                        </a>
                    </div>   
                </div>                      
            </div>
        </article>
        <article class="contact-container">           
            <div class="contact-go-section">                
                <div class="side-card">
                    <span>
                        <h2>Etes-vous prêt<br>pour travailler <span>ensemble ?</span>
                        </h2>
                    </span>                            
                    <div class="btn-card">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button">
                            <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                        </a>
                    </div>   
                </div>                      
            </div>




        </article>


    </div>

</main>
<?php get_footer(); ?>
