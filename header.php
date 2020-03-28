<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>
        <?php if (is_front_page()) { ?>
            Home - <?php bloginfo('name'); ?>
        <?php } else {    ?>
            <?php wp_title('')?> - <?php bloginfo('name'); ?>
        <?php }?>
    </title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">

    <?php wp_head(); ?>

    <?php if ( is_front_page() ) { ?>
        <meta property="og:image" content="<?php bloginfo('template_directory') ?>/wp-content/themes/openvld-2019/images/christian-small-2@2x.jpg">
    <?php }; ?>

</head>
<body>

    <?php if ( is_front_page() ) { ?>
        <div class="c-bg"></div>
    <?php }; ?>

    <header class="c-header <?php if ( is_front_page() ) { ?>c-header--home<?php }; ?>">
        <div class="c-nav-logo-holder">

            <div class="c-logo">
                <a href="/">
                    <?php if ( is_front_page() ) { ?>
                        <h1>
                            <span><?php echo get_bloginfo('name'); ?></span>
                            <img
                                style="width: 150px;"
                                src="<?php bloginfo('template_directory') ?>/images/logo-spread-i.svg" alt="<?php echo get_bloginfo('name'); ?>"
                            >
                        </h1>
                    <?php } else { ?>
                        <div class="c-site-title">
                            <span><?php echo get_bloginfo('name'); ?></span>
                            <img
                                style="width: 150px;"
                                src="<?php bloginfo('template_directory') ?>/images/logo-spread.svg" alt="<?php echo get_bloginfo('name'); ?>"
                            >
                        </div>
                    <?php }; ?>
                </a>
            </div>

            <nav class="c-nav">

                <ul>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'main-menu',
                                'items_wrap' => '%3$s',
                                'container' => false
                            )
                        );
                    ?>

                    <li class="bp3-ib-show c-nav-icon">
                        <a href="https://twitter.com/ChristianLeysen" target="_blank" rel="noopener">
                            <?php if ( is_front_page() ) { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/twitter-white.svg" alt="Twitter">
                            <?php } else { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/twitter.svg" alt="Twitter">
                            <?php }; ?>
                        </a>
                    </li>
                    <li class="bp3-ib-show c-nav-icon">
                        <a href="https://www.facebook.com/LeysenChristian/" target="_blank" rel="noopener">
                            <?php if ( is_front_page() ) { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/facebook-white.svg" alt="Facebook">
                            <?php } else { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/facebook.svg" alt="Facebook">
                            <?php }; ?>
                        </a>
                    </li>
                    <li class="bp3-ib-show c-nav-icon">
                        <a href="https://instagram.com/christianleysen/" target="_blank" rel="noopener">
                            <?php if ( is_front_page() ) { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/instagram-white.svg" alt="Instagram">
                            <?php } else { ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/instagram.svg" alt="Instagram">
                            <?php }; ?>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </header>
