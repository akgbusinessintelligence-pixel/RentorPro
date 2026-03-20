<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-inter text-slate-900 bg-white' ); ?>>
<?php wp_body_open(); ?>

<!-- Mobile Drawer Overlay -->
<div id="drawer-overlay" class="md:hidden"></div>

<!-- Mobile Drawer Menu -->
<aside id="mobile-drawer" class="md:hidden flex flex-col">
    <div class="px-6 py-5 border-b border-slate-100 flex justify-between items-center bg-white">
        <div class="font-extrabold text-zillow-blue text-2xl tracking-tighter italic uppercase">Rentor</div>
        <button id="close-drawer" class="p-2 -mr-2 text-slate-400 hover:text-slate-900 transition-colors active:rotate-90 duration-200">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    <nav class="flex-1 overflow-y-auto">
        <ul id="mobile-menu-items" class="flex flex-col">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu1',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </ul>
    </nav>
    <div class="p-6 bg-slate-50 space-y-3">
        <a href="#" class="block w-full bg-zillow-blue text-white text-center py-4 rounded-xl font-black shadow-lg shadow-blue-100 uppercase tracking-widest text-xs active:scale-95 transition-transform">Sign In / Register</a>
        <p class="text-[10px] text-center text-slate-400 font-bold uppercase tracking-wider">Your Professional Rental Partner</p>
    </div>
</aside>

<header class="bg-white border-b border-slate-100 sticky top-0 z-50 py-1 md:py-2 backdrop-blur-md bg-white/90 safe-top">
    <div class="container mx-auto px-4 flex items-center max-w-7xl h-14 md:h-16">
        
        <!-- Mobile Menu Toggle -->
        <button id="open-drawer" class="md:hidden p-2 -ml-2 text-slate-600 active:scale-90 transition-transform">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>

        <!-- Logo -->
        <div class="flex-shrink-0 mx-auto md:mx-0 md:mr-12">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block active:scale-95 transition-transform">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Rentor Logo" class="h-6 md:h-8 w-auto">
                </a>
                <?php
            endif;
            ?>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex gap-6 lg:gap-8 text-sm font-bold tracking-tight uppercase text-slate-500">
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

        <div class="hidden md:flex flex-grow justify-end">
            <a href="#" class="text-sm font-black uppercase tracking-widest text-zillow-blue hover:text-blue-700 transition-colors">Sign In</a>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('open-drawer');
    const closeBtn = document.getElementById('close-drawer');
    const drawer = document.getElementById('mobile-drawer');
    const overlay = document.getElementById('drawer-overlay');

    function toggleDrawer() {
        drawer.classList.toggle('open');
        overlay.classList.toggle('open');
        document.body.classList.toggle('overflow-hidden');
    }

    if(openBtn) openBtn.addEventListener('click', toggleDrawer);
    if(closeBtn) closeBtn.addEventListener('click', toggleDrawer);
    if(overlay) overlay.addEventListener('click', toggleDrawer);
});
</script>
