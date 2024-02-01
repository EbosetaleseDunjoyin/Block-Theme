<?php 

function register_styles_scripts(){
        wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() .'/style.css'), "all"  );
}

add_action('wp_enqueue_scripts',  "register_styles_scripts");


if(! function_exists('edblocktheme_support')){

    function edblocktheme_support(){
        
        add_theme_support('wp-block-styles');

        add_editor_style('style.css');

    }
    add_action('after_setup_theme','edblocktheme_support');
}

