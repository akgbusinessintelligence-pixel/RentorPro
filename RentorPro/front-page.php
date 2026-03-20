<?php get_header(); ?>

<!-- Hero Slider Section -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden group">
    <div class="swiper myHeroSwiper h-full">
        <div class="swiper-wrapper">
            <?php
            $slides_found = false;
            for ( $i = 1; $i <= 3; $i++ ) :
                $img = get_theme_mod( "rentor_slide_img_$i" );
                $title = get_theme_mod( "rentor_slide_title_$i" );
                $desc = get_theme_mod( "rentor_slide_desc_$i" );

                // Fallback for first slide if empty
                if ( $i === 1 && ! $img ) {
                    $img = get_template_directory_uri() . '/assets/images/zillow-hero.png';
                    $title = $title ?: 'Rentals. Homes. Agents. Loans.';
                }

                if ( $img ) :
                    $slides_found = true;
                ?>
                <div class="swiper-slide relative">
                    <img src="<?php echo esc_url( $img ); ?>" alt="Hero <?php echo $i; ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                        <div class="text-center px-4 w-full max-w-3xl">
                            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-2xl">
                                <?php echo esc_html( $title ); ?>
                            </h1>
                            <?php if ( $desc ) : ?>
                                <p class="text-white/90 text-lg mb-8 max-w-xl mx-auto hidden md:block">
                                    <?php echo esc_html( $desc ); ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if ( $i === 1 ) : // Search bar only on first slide or search-able slides ?>
                                <div class="bg-white rounded-lg p-2 flex shadow-2xl max-w-xl mx-auto items-center">
                                    <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code" class="flex-1 border-none px-4 py-3 text-slate-700 outline-none text-sm md:text-lg">
                                    <button class="bg-zillow-blue text-white p-3 rounded-md hover:bg-blue-700 transition-colors">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            <?php else : ?>
                                <a href="#" class="inline-block bg-zillow-blue text-white px-8 py-3 rounded-md font-bold hover:bg-blue-700 transition-all shadow-lg">Learn More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                endif;
            endfor; 
            ?>
        </div>
        <!-- Swiper Navigation -->
        <div class="swiper-button-next !text-white !after:text-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <div class="swiper-button-prev !text-white !after:text-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <div class="swiper-pagination !bottom-8"></div>
    </div>
</section>

<!-- Main Content Section with Shortcode -->
<main class="container mx-auto px-4 py-16 max-w-7xl">
    <div class="mb-12">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Featured Listings</h2>
        <div class="h-1.5 w-20 bg-zillow-blue rounded-full"></div>
    </div>

    <!-- Plugin Listing Output -->
    <div class="listing-output bg-slate-50 rounded-2xl p-6 md:p-8 shadow-inner border border-slate-100 min-h-[400px]">
        <?php 
        // Display listings from existing plugin using the shortcode
        echo do_shortcode('[es_my_listing]'); 
        ?>
    </div>
</main>

<!-- Initialize Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.myHeroSwiper', {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });
});
</script>

<?php get_footer(); ?>
