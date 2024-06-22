<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chan Bros</title>

    <?php wp_head(); ?>
</head>
<body>
    
<?php get_header(); ?>

<div class="hero-container-other">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" alt="youtube">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="contact-para container-fluid">
    <div><h2 id="contact-title">We will never share your personal information</h2></div>
    <div class="contact-details">
        <div><p id="contact-number">0423 871 017</p></div>
        <div><p>ashwinluchowa@gmail.com</p></div>
    </div>
</div>

<!-- Contact Form Widget Area -->
<?php if( dynamic_sidebar('chan_bros_widget_area_form') ) : else : endif; ?>

<?php get_footer(); ?>
