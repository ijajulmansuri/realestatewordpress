<?php
function realestate_enqueue_styles() {

    
    wp_enqueue_style('realestate-styles', get_stylesheet_directory_uri() . '/assets/css/style.css');

    
    wp_enqueue_script('realestate-script', get_stylesheet_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'realestate_enqueue_styles');
?>

