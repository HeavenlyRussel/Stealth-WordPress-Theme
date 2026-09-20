<?php
// functions.php

function stealth_portfolio_enqueue_scripts() {
    // Enqueue the main style.css
    wp_enqueue_style(
        'stealth-main-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'stealth_portfolio_enqueue_scripts');

function stealth_portfolio_theme_setup() {
    // Enable WordPress support for custom editor styles
    add_theme_support( 'editor-styles' );
    // Load your main style.css into the block editor
    add_editor_style( 'style.css' );
}
// Hook this into the theme setup phase
add_action( 'after_setup_theme', 'stealth_portfolio_theme_setup' );

function stealth_portfolio_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Header Menu', 'stealth-portfolio' ),
    ) );
}
add_action( 'init', 'stealth_portfolio_register_menus' );