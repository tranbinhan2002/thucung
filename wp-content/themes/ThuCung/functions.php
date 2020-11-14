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

