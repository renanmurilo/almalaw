<?php 
    // Função para registrar os Scripts e o CSS
    function almalaw_scripts() {
        // Desregistra o jQuery do Wordpress
        wp_deregister_script('jquery');

        // Registra o jQuery Novo
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery.js', [], "3.4.1", true );

        // Rigistra o plugin do slider
        wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', ['jquery'], false, true);
        
        // Registrar Main
        wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins-script'], false, true );

        // Carrega o Script	wp_enqueue_script( 'main-script' );
        wp_enqueue_script( 'main-script' );	
    }
    add_action( 'wp_enqueue_scripts', 'almalaw_scripts' );

    function almalaw_css() {
        wp_register_style( 'almalaw-style', get_template_directory_uri() . '/style.css', [], false, false );
    
        wp_register_style('owl-carousel', get_template_directory_uri() . '/js/plugins/owl.carousel.min.css', [], false, false);
    
        wp_enqueue_style( 'owl-carousel' );
        wp_enqueue_style( 'almalaw-style' );
    }
    add_action( 'wp_enqueue_scripts', 'almalaw_css' );

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles'); 

    // Habilitar Menus
    add_theme_support('menus');

    // Registrar Menu
    function register_my_menu() {
        register_nav_menu('menu-principal',__( 'Menu Principal' ));
    }
    add_action( 'init', 'register_my_menu' );

   function teo_remove_sticky( $query = false ) {

	    // Verifica se a consulta está sendo realizada na front-page ou na home
        if ( @is_front_page() || @is_home() ) { 
            // Remove os sticky posts da consulta (posts fixos)
            $query->set(
                'post__not_in',
                get_option( 'sticky_posts' )
            );
        }

    } // teo_remove_sticky

    // Adiciona a ação
    add_action('pre_get_posts','teo_remove_sticky');
?>