<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chan Bros</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="nav-container container-fluid">
            <div class="nav-logo">
                <a href="#">Chan Bros</a>
            </div>

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu', 
                    'container_class' => 'nav-menu',
                ));
            ?>
        </div>
    </header>