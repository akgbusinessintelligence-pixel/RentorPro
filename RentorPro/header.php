<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-inter text-slate-900 bg-white' ); ?>>
<?php wp_body_open(); ?>

<header class="bg-white border-b border-slate-200 sticky top-0 z-50 py-2">
    <div class="container mx-auto px-4 flex justify-between items-center max-w-7xl">
        
        <!-- Left Menu (Dynamic) -->
        <nav class="hidden md:flex gap-6 text-sm font-medium">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </nav>

        <div class="flex-shrink-0">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Rentor Logo" class="h-8 md:h-10">
                </a>
                <?php
            endif;
            ?>
        </div>

        <div class="hidden md:block w-32"></div> <!-- Spacer to keep logo centered -->

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden p-2 text-slate-600">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
    </div>
</header>
