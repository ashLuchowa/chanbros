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
        <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="youtube">
        <h1>About Us</h1>
    </div>
</div>

<div class="featured-container featured-container-about container-fluid">
    <div class="featured-image-container img-about container-fluid">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shop.jpg" alt="youtube">
    </div>
    <div class="featured-headings">
        <h2>Our History</h2>
        <p>Chan Brothers was established on August 29, 1929 when Lee Chan and his oldest two sons Peter and Eric started 
           the business and younger brother Eddie joined after high school studies in 2001. </p>
           <a href="#">Read More</a>
    </div>
</div>

<?php get_template_part('template-parts/about/services', 'none') ?>

<?php get_template_part('template-parts/about/about-items', 'none') ?>

<div class="about-paragraph container-fluid">
    <p>Much of the range remains the same, Nuts, Dried Fruits, Dried Beans, Herbs and Spices and a large range of Coffee Beans which are roasted on site.</p>
</div>

<?php get_footer(); ?>
