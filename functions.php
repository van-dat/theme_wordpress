<?php 

function my_theme_enqueue_styles() {
    $theme_version = wp_get_theme()->get('Version');
    $style_path = get_template_directory() . '/src/assets/css/styles.css';
    $style_version = filemtime($style_path);

    wp_enqueue_style('style', get_template_directory_uri() . '/src/assets/css/styles.css', array(), $style_version);
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('my-theme-script', plugin_dir_url(__FILE__) . '/src/assets/js/index.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
