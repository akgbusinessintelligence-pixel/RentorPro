<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header">
    <div class="container header-inner">
        <div class="nav-group left-nav">
            <a href="#">Buy</a>
            <a href="#">Rent</a>
            <a href="#">Sell</a>
            <a href="#">Home Loans</a>
            <a href="#">Agent finder</a>
        </div>

        <div class="site-logo">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Rentor Logo">
                </a>
                <?php
            endif;
            ?>
        </div>

        <div class="nav-group right-nav">
            <a href="#">Manage Rentals</a>
            <a href="#">Advertise</a>
            <a href="#">Help</a>
            <a href="#">Sign In</a>
        </div>
    </div>
</header>
