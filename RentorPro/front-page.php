<?php get_header(); ?>

<!-- Hero Slider Section -->
<section class="relative h-[450px] md:h-[600px] overflow-hidden group">
    <div class="swiper myHeroSwiper h-full">
        <div class="swiper-wrapper">
            <?php
            for ( $i = 1; $i <= 3; $i++ ) :
                $img = get_theme_mod( "rentor_slide_img_$i" );
                $title = get_theme_mod( "rentor_slide_title_$i" );
                $desc = get_theme_mod( "rentor_slide_desc_$i" );

                if ( $i === 1 && ! $img ) {
                    $img = get_template_directory_uri() . '/assets/images/zillow-hero.png';
                    $title = $title ?: 'Rentals. Homes. Agents. Loans.';
                }

                if ( $img ) :
                ?>
                <div class="swiper-slide relative">
                    <img src="<?php echo esc_url( $img ); ?>" alt="Hero <?php echo $i; ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-slate-900/30 flex items-center justify-center pt-8 md:pt-0">
                        <div class="text-center px-6 w-full max-w-3xl transform transition-all">
                            <h1 class="text-3xl md:text-6xl font-extrabold text-white mb-4 md:mb-6 drop-shadow-2xl leading-tight">
                                <?php echo esc_html( $title ); ?>
                            </h1>
                            <?php if ( $desc ) : ?>
                                <p class="text-white/90 text-sm md:text-lg mb-6 md:mb-8 max-w-xl mx-auto line-clamp-2 md:line-clamp-none">
                                    <?php echo esc_html( $desc ); ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if ( $i === 1 ) : ?>
                                <div class="bg-white rounded-xl p-1.5 md:p-2 flex shadow-2xl max-w-xl mx-auto items-center">
                                    <input type="text" placeholder="Neighborhood, City, ZIP" class="flex-1 border-none px-3 md:px-4 py-2 md:py-3 text-slate-700 outline-none text-xs md:text-lg">
                                    <button class="bg-zillow-blue text-white p-2 md:p-3 rounded-lg hover:bg-blue-700 transition-colors shadow-lg active:scale-95">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="md:w-6 md:h-6"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            <?php else : ?>
                                <a href="#" class="inline-block bg-zillow-blue text-white px-6 md:px-8 py-2.5 md:py-3 rounded-xl font-bold hover:bg-blue-700 transition-all shadow-lg active:scale-95 text-sm md:text-base">Explore Now</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                endif;
            endfor; 
            ?>
        </div>
        <!-- Swiper Nav (Desktop only) -->
        <div class="swiper-button-next !hidden md:!flex !text-white !after:text-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <div class="swiper-button-prev !hidden md:!flex !text-white !after:text-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <div class="swiper-pagination !bottom-6 md:!bottom-8"></div>
    </div>
</section>

<!-- Main Content Section -->
<main class="container mx-auto px-4 py-8 md:py-16 max-w-7xl">
    <div class="mb-8 md:mb-12 flex items-center justify-between">
        <div>
            <h2 class="text-xl md:text-3xl font-extrabold text-slate-900 mb-1 md:mb-2 italic uppercase tracking-tight">Featured Listings</h2>
            <div class="h-1 md:h-1.5 w-12 md:w-20 bg-zillow-blue rounded-full"></div>
        </div>
        <button class="text-zillow-blue text-xs md:text-sm font-bold hover:underline">View All</button>
    </div>

    <!-- Plugin Listing Output -->
    <div class="listing-output bg-white md:bg-slate-50 rounded-2xl md:p-8 shadow-sm md:shadow-inner md:border md:border-slate-100 min-h-[300px]">
        <?php 
        // Display listings from existing plugin
        echo do_shortcode('[es_my_listing]'); 
        ?>
    </div>
</main>

<!-- Initialize Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.myHeroSwiper', {
        loop: true,
        autoplay: { delay: 6000 },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        effect: 'fade',
        fadeEffect: { crossFade: true }
    });
});
</script>

<?php get_footer(); ?>
