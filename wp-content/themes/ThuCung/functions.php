<?php
define('TPL_DIR_URI', get_template_directory_uri());
    function svh_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', TPL_DIR_URI .'./assets/vendor/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', TPL_DIR_URI . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'svh_enqueue_styles');
    function svh_enqueue_scripts() {
        wp_enqueue_script( 'popper', TPL_DIR_URI .'/assets/vendor/popper/popper.min.js', ['jquery']);
        wp_enqueue_script( 'bootstrap', TPL_DIR_URI .'/assets/vendor/bootstrap/js/bootstrap.min.js', 
        ['jquery']);
    }
    add_action( 'wp_enqueue_scripts', 'svh_enqueue_scripts');

    function svh_widgets_init() {

        register_sidebar(
            [
                'name'          => 'Footer',
                'id'            => 'sidebar-footer',
                'description'   => 'Add widgets here to appear in your footer.',
                'before_widget' => '<div id="%1$s" class="col-md-4 footer-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="footer-widget__title">',
                'after_title'   => '</h3>',
            ]
        );
    
        register_sidebar(
            [
                'name'          => 'Sidebar',
                'id'            => 'sidebar-main',
                'description'   => 'Add widgets here to appear in your sidebar.',
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ]
        );
    
    }
    add_action( 'widgets_init', 'svh_widgets_init' ); 
