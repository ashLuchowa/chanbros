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
            <img src="<?php echo get_template_directory_uri(); ?>/images/featured.jpg" alt="youtube">
            <h1>Our Products</h1>
        </div>
    </div>

    <?php get_template_part('template-parts/products/products', 'none') ?>

    <?php get_footer(); ?>
