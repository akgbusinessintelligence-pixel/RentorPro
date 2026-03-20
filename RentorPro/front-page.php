<?php get_header(); ?>

<!-- Hero Slider Section -->
<section class="relative h-[55vh] md:h-[600px] min-h-[400px] overflow-hidden group">
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
                    <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center pt-10 md:pt-0">
                        <div class="text-center px-6 w-full max-w-3xl transform transition-all duration-700 swiper-content opacity-0 translate-y-4">
                            <h1 class="hero-title font-black text-white mb-4 md:mb-6 drop-shadow-2xl tracking-tighter italic">
                                <?php echo esc_html( $title ); ?>
                            </h1>
                            <?php if ( $desc ) : ?>
                                <p class="hero-desc text-white/90 font-medium mb-8 max-w-xl mx-auto drop-shadow-md">
                                    <?php echo esc_html( $desc ); ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if ( $i === 1 ) : ?>
                                <div class="bg-white rounded-2xl p-1.5 md:p-2.5 flex shadow-2xl max-w-xl mx-auto items-center border border-white/20 backdrop-blur-sm">
                                    <input type="text" placeholder="Search neighborhood, city..." class="flex-1 border-none px-4 py-3 md:py-4 text-slate-700 outline-none text-sm md:text-xl font-medium placeholder:text-slate-400">
                                    <button class="bg-zillow-blue text-white p-3 md:p-4 rounded-xl hover:bg-blue-700 transition-all shadow-lg active:scale-90 flex items-center justify-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="w-5 h-5 md:w-7 md:h-7"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                            <?php else : ?>
                                <a href="#" class="inline-block bg-zillow-blue text-white px-10 py-4 rounded-2xl font-black hover:bg-blue-700 transition-all shadow-xl active:scale-90 text-sm md:text-base uppercase tracking-widest">Discover Listings</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                endif;
            endfor; 
            ?>
        </div>
        <!-- Swiper Nav -->
        <div class="swiper-button-next !hidden lg:!flex !text-white !after:text-2xl transition-all hover:scale-110"></div>
        <div class="swiper-button-prev !hidden lg:!flex !text-white !after:text-2xl transition-all hover:scale-110"></div>
        <div class="swiper-pagination !bottom-8 md:!bottom-10"></div>
    </div>
</section>

<!-- Main Listings Section -->
<main class="container mx-auto px-4 py-10 md:py-20 max-w-7xl">
    <div class="mb-10 md:mb-16 flex items-end justify-between border-b border-slate-100 pb-6">
        <div>
            <h2 class="text-2xl md:text-4xl font-black text-slate-900 mb-1 italic uppercase tracking-tighter">Properties to Rent</h2>
            <p class="text-slate-400 text-xs md:text-sm font-bold uppercase tracking-widest">Hand-picked premium listings</p>
        </div>
        <a href="#" class="text-zillow-blue text-xs md:text-sm font-black uppercase tracking-widest hover:text-blue-800 transition-colors flex items-center gap-2">
            See all
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
    </div>

    <!-- Plugin Listing Output -->
    <div class="listing-output bg-white md:bg-slate-50 rounded-[2.5rem] md:p-10 shadow-sm md:shadow-inner md:border md:border-slate-100 min-h-[400px]">
        <?php echo do_shortcode('[es_my_listing]'); ?>
    </div>
</main>

<style>
.swiper-slide-active .swiper-content {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
</style>

<!-- Initialize Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.myHeroSwiper', {
        loop: true,
        autoplay: { delay: 6000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        effect: 'fade',
        fadeEffect: { crossFade: true }
    });
});
</script>

<?php get_footer(); ?>
