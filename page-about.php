<?php


get_header();
?>

<main class="about-container">

    <!-- SECTION 1 -->
        <article class="projets">
            <div class="myself-section pin">
                <p>Developpeuse WEB</p>
                <h1>Jinane Lotfi</h1>
            </div>
            <div class="projets-about-section pin">
                <div class="about-image">
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                    <h1>Un peu de moi</h1>
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                </div>                    
                <div class="about-section">                        
                    <p>Passionnée par le monde de la programmation et du développement web, je suis une développeuse WordPress expérimentée, spécialisée dans la création de sites web exceptionnels. Ma mission consiste à concevoir des sites fonctionnels et esthétiques en utilisant WordPress, le CMS le plus populaire au monde.</p>
                                            
                </div>
            </div>            
        </article>

        <!-- SECTION 2 -->
        <article class="contact-container">            
            <div class="experience-go-section pin">
                <h2>Expérience</h2>
                <span>                    
                    <p>2023</p>
                    <h3>Développeur Intégrateur web Spécialisé Wordpress</h3>
                    <p>Openclassroom</p>
                </span>

                <span>
                    <p>2018 - 2022</p>
                    <h3>Consultante marketing et éditreice de vidéos</h3>
                    <p>Particuliers</p>
                </span>

                <span>
                    <p>2017 - 2022</p>
                    <h3>Cadre de Laboratoire d'analyses médicales</h3>
                    <p>Clinique privée de Cardiologie et Chirurgie cardiovasculaire</p>
                </span>
                
            </div>
            <div class="formation-go-section pin">
            <h2>Formation</h2>
                    <span>                    
                    <p>2023</p>
                    <h3>Développeur Intégrateur web Spécialisé Wordpress</h3>
                    <p>Openclassroom</p>
                </span>
                <span>
                    <p>2015 - 2017</p>
                    <h3>Master 2 - Microbiologie Appliquée</h3>
                    <p>Université Oran Es-senia</p>
                </span>
                <span>
                    <p>2014 - 2015</p>
                    <h3>Master 1 - Ecosciences, Microbiologie</h3>
                    <p>Université Lyon 1</p>
                </span>
                <span>
                    <p>2012 - 2014</p>
                    <h3>Licence - Microbiologie</h3>
                    <p>Université Lyon 1</p>
                </span>
                <span>
                    <p>2010 - 2012</p>
                    <h3>PACES</h3>
                    <p>UFR Lyon Sud</p>
                </span>
            </div>
        </article>
        <!-- Fin section 2 -->

        <!-- Section 3 -->
        <article class="services-container">
            <div class="contact-section pin">
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
            <div class="contact-go-section pin">                
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
            <div class="about-section pin">
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
        </article>     

        <!-- Section 4 COMPETENCES -->
        <!-- SECTION 4 -->
        <article class="skills-container pin">            
            <div class="left-skills-section">
                <h2>Soft Skills</h2>
                <span>              
                    <i class="fa-solid fa-palette" style="color: #ffffff;"></i>      
                    <h3>Créative</h3>
                </span>
                <span>
                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>   
                    <h3>Curieuse</h3>
                </span>
                <span>
                    <i class="fa-solid fa-puzzle-piece" style="color: #ffffff;"></i>
                    <h3>Polyvalente</h3>
                </span>
                <span class="poly">
                    <span>
                        <i class="fa-solid fa-comments" style="color: #ffffff;"></i>
                        <h3>Polyglote</h3>
                    </span>                    
                    <p>Français<br>Anglais<br>Arabe</p>
                </span>
                
            </div>
            <div class="right-skills-section pin">
                <div class="about-image">
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                    <h1>Mes compétences</h1>
                    <img class="image-star" src="<?php echo get_template_directory_uri() . './assets/images/star-2.png'; ?>" alt="signature">
                </div>    
                
                <div class="explication-container">
                    <div class="explication-card pin">
                        <h2>Développement</h2>                        
                        <p>Je conçois des sites web exceptionnels en mettant l'accent sur la qualité et l'originalité. Mon expertise en responsive design garantit une expérience utilisateur optimale sur tous les dispositifs. J'ai une expérience solide en gestion de projet, une sensibilité aux principes du Green code pour des sites plus respectueux de l'environnement, et je suis familière avec les méthodologies agiles.                            
                        </p>                                            
                    </div>
                    <div class="explication-card pin">                        
                        <h2>SEO</h2>                        
                        <p>J'améliore la visibilité en ligne de votre site web. Cela inclut par exemple : l'analyse approfondie de l'optimisation SEO actuelle, la recherche de mots-clés pertinents, le suivi des performances SEO, l'optimisation de la vitesse de chargement, la stratégie de contenu etc. Mon objectif est d'augmenter votre classement dans les moteurs de recherche, générant ainsi plus de trafic organique et de prospects qualifiés pour votre site web.                           
                        </p>       
                                             
                    </div>
                    <div class="explication-card pin">                        
                        <h2>Outils</h2>                        
                        <span>Wordpress</span>       
                        <span>Elementor</span>       
                        <span>Gutenberg</span>       
                        <span>Git & Github</span>       
                        <span>Sass</span>       
                                             
                    </div>
                    <div class="explication-card pin">                        
                    <h2>Langages</h2>                        
                        <span>HTML</span>       
                        <span>CSS</span>       
                        <span>PHP</span>       
                        <span>Javascript</span>   
                                             
                    </div>
                </div>             



            </div>
        </article>
        <!-- Fin section 4 -->


    </main>

<?php get_footer(); ?>