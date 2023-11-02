<?php


get_header();
?>

<main class="contact-container">
    <div class="side-contact">
        <div class="contact-icones">
            <h2></h2>
            <div class="mail"></div>
            <div div class="tel"></div>
            <div class="location"></div>
        </div>
        <div class="social-info">
            <h2></h2>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>    
    </div>
    <div class="contact-container">
        <!-- Modal content -->
        <div class="box">                  
            <div class="contact-box">
                <?php echo do_shortcode('[contact-form-7 id="0e27346" title="Contact"]'); ?>
            </div>           
        </div>
    </div>
</main>

<?php get_footer(); ?>