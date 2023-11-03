<?php


get_header();
?>

<main class="page-contact-container">
    <div class="side-contact">
        <div class="contact-icones">
            <h2>Informations de contact</h2>
            <div class="mail">
                <span class="span-i">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                </span>                
                <span class="span">
                    <h3>Mail</h3>
                    <p>jinane.lofi@gmail.com</p>
                </span>
            </div>
            <div class="tel">
                <span class="span-i">
                    <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                </span>
                <span class="span">
                    <h3>Téléphone</h3>
                    <p>+33 6 36 11 79 45</p>
                </span>
            </div>
            <div class="location">
                <span class="span-i">
                    <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                </span>
                <span class="span">
                    <h3>Localisation</h3>
                    <p>Lyon</p>
                </span>
            </div>
        </div>
        <div class="social-info">
            <h2>Réseaux sociaux</h2>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>    
    </div>
    <div class="contact-container">
        <!-- Modal content -->
        <div class="box">                  
            <div class="contact-box">
                <h2>Travaillons <span>ensemble</span></h2>
                <?php echo do_shortcode('[contact-form-7 id="0e27346" title="Contact"]'); ?>
            </div>           
        </div>
    </div>
</main>

<?php get_footer(); ?>