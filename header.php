<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container site-header__inner">
            <h1 class="site-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">Russel Dave Peruda</a>
            </h1>
            <nav class="site-header__nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ) );
                ?>
            </nav>
        </div>
    </header>