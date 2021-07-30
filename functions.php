<?php

//Theme Support

    function rst_theme_support() {
        add_theme_support('title-tag');
        add_theme_support( 'custom-logo', array ( 
            'height'               => 94,
            'width'                => 200,
            'flex-height'          => false,
            'flex-width'           => false,
            'header-text'          => array( 'site-title', 'site-description' ),
        ) );
        add_theme_support('post-thumbnails');

    }

    add_action('after_setup_theme', 'rst_theme_support');

//Enqueue Styles

    function RST_register_styles(){

        wp_enqueue_style('rst-glider', get_template_directory_uri() . '/assets/css/glider.min.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-about', get_template_directory_uri() . '/assets/css/apropos.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-fontawesome', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css', array(), '5.15.2', 'all');
        wp_enqueue_style('rst-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
        wp_enqueue_style('rst-article', get_template_directory_uri() . '/assets/css/article.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-archive', get_template_directory_uri() . '/assets/css/archive.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-404', get_template_directory_uri() . '/assets/css/404.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-faq', get_template_directory_uri() . '/assets/css/faq.css', array(), '1.0', 'all');
        wp_enqueue_style('rst-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
        
        
        

    }

    add_action( 'wp_enqueue_scripts', 'RST_register_styles');


//Enqueue Scripts

    function RST_register_scripts(){

        wp_enqueue_script('rst-glider', get_template_directory_uri() .'/assets/js/glider.min.js', array(), '1.0', true);
        wp_enqueue_script('rst-faq', get_template_directory_uri() .'/assets/js/faq.js', array(), '1.0', true);
        wp_enqueue_script('rst-navbar', get_template_directory_uri() .'/assets/js/navbar-article.js', array(), '1.0', true);
        wp_enqueue_script('rst-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
        wp_enqueue_script('rst-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
        
    }

    add_action( 'wp_enqueue_scripts', 'RST_register_scripts');



// Image Sizes

    add_image_size('blog-large', 600, 400, true);
    add_image_size('blog-medium', 560, 413, true);
    add_image_size('blog-archive', 200, 140, true);
    add_image_size('blog-small', 125, 125, true);



//Custom Excerpt

    function custom_excerpt_length( $length ) {
        return 30;
    }

    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>



