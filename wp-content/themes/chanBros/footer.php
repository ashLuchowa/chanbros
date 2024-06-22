<footer>
    <div class="footer-container container-fluid">
        <div class="inner-footer-container">
            <div class="footer-logo"><a href="#">Chan Bros</a></div>
            
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu', 
                    'container_class' => 'bottom-menu',
                ));
            ?>

            <div class="footer-product">
                <ul>
                    <li><h2>Products</h2></li>
                    <li><a href="#">Dried Fruits</a></li>
                    <li><a href="#">Spices</a></li>
                    <li><a href="#">Flour</a></li>
                    <li><a href="#">Rice</a></li>
                    <li><a href="#">Cheese</a></li>
                    <li><a href="#">Meat</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <ul>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="youtube"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedIn"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">Chan Brothers &copy 2024</div>
    </div>
</footer>