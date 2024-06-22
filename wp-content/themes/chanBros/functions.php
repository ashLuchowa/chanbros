<?php
// ////////////////////////////////// Enqueue stylesheet ///////////////////////////// //	
function add_theme_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '../css/main.scss',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_style' );


// ////////////////////////////////// ADD FAVICON ///////////////////////////// //
function add_favicon() {
   echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico" />';
}

add_action('wp_head', 'add_favicon');


// ////////////////////////////////// Hide Admin bar Margin ///////////////////////////// //
function hide_admin_bar() {
   wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');
   return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar' );


// ////////////////////////////////// Menu Function ///////////////////////////// //
function custom_new_menu() {
   register_nav_menus(
      array(
         'top-menu' => __('Top Menu'),
      )
   );
}
add_action('init', 'custom_new_menu');


// ////////////////////////////////// FORM WIDGET AREA ///////////////////////////// //
function chanbros_form_init() {
   register_sidebar( array(
       'name' => 'Chan Bros Widget Area Form',
       'id' => 'chan_bros_widget_area_form',
       'before_widget' => '<div class="form-container">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after-title' => '</h3>',
   ));
}

add_action( 'widgets_init', 'chanbros_form_init' );