<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <header id="header">
            <div class='container'>
            <div id="branding" class='branding'>
                <div id="site-title" class='site-title'>
                    <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '<h1>';
                    } ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
                    <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '</h1>';
                    } ?>
                </div>
                <div id="site-description" class='site-subtitle'>
                    <?php bloginfo('description'); ?>
                </div>
            </div>
            <nav id="menu">
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
            <div class="utilities">
                <div class='utility-links'><?php wp_nav_menu(array('theme_location' => 'utility-links')); ?></div>
                <div id="search" class='search'><?php get_search_form(); ?></div>
            </div>
                </div>
        </header>
        <div id="container">