<?php get_header(); ?>

<!-- Hero Slider Section -->
<section class="relative h-[500px] overflow-hidden group">
    <div class="swiper myHeroSwiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zillow-hero.png" alt="Hero 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                    <div class="text-center px-4 w-full max-w-3xl transform transition-all duration-700">
                        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-2xl">Rentals. Homes. Agents. Loans.</h1>
                        <p class="text-white/90 text-lg mb-8 max-w-xl mx-auto hidden md:block">Discover your dream home with the most trusted real estate network.</p>
                        <div class="bg-white rounded-lg p-2 flex shadow-2xl max-w-xl mx-auto items-center">
                            <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code" class="flex-1 border-none px-4 py-3 text-slate-700 outline-none text-sm md:text-lg">
                            <button class="bg-zillow-blue text-white p-3 rounded-md hover:bg-blue-700 transition-colors">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=1600&q=80" alt="Hero 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                    <div class="text-center px-4 w-full max-w-3xl">
                        <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-2xl">Luxury Living Redefined</h2>
                        <p class="text-white/90 text-lg mb-8 max-w-xl mx-auto hidden md:block">Experience unparalleled comfort in our handpicked premium villas.</p>
                        <a href="#" class="inline-block bg-zillow-blue text-white px-8 py-3 rounded-md font-bold hover:bg-blue-700 transition-all">Explore Luxury</a>
                    </div>
                </div>
            </div>
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
            delay: 5000,
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
