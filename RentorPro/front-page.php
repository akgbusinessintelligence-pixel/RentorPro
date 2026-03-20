<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative h-[400px] flex items-center justify-center bg-cover bg-center overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/zillow-hero.png');">
    <div class="absolute inset-0 bg-slate-900/40"></div>
    <div class="relative z-10 text-center px-4 w-full max-w-2xl">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-8 drop-shadow-lg italic">Rentals. Homes. Agents. Loans.</h1>
        <div class="bg-white rounded-lg p-2 flex shadow-2xl max-w-xl mx-auto items-center">
            <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code" class="flex-1 border-none px-4 py-3 text-slate-700 outline-none text-sm md:text-base">
            <button class="text-zillow-blue p-2 hover:bg-slate-50 rounded-md transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </div>
    </div>
</section>

<!-- Main Listings Section -->
<main class="container mx-auto px-4 py-12 max-w-7xl">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Continue searching for Properties</h2>
            <p class="text-zillow-blue font-semibold text-sm">7+ new listings</p>
        </div>
        <div class="flex gap-2">
            <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:border-zillow-blue hover:text-zillow-blue transition-all">&lsaquo;</button>
            <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:border-zillow-blue hover:text-zillow-blue transition-all">&rsaquo;</button>
        </div>
    </div>

    <!-- Listing Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        // Simulated property cards using Tailwind v4 classes
        for($i=1; $i<=4; $i++) :
        ?>
        <div class="bg-white border border-slate-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow cursor-pointer group">
            <div class="relative h-44 overflow-hidden">
                <img src="https://images.unsplash.com/photo-15<?php echo 70129477492-45c003edd2be + $i; ?>?auto=format&fit=crop&w=400&q=80" alt="Listing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <span class="absolute top-3 left-3 bg-zillow-orange text-white text-[10px] uppercase font-bold px-2 py-1 rounded shadow-sm">Apply Instantly</span>
                <button class="absolute top-3 right-3 text-white/80 hover:text-white transition-colors">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-xl font-extrabold text-slate-900">$<?php echo number_format(1800 + ($i * 150)); ?></span>
                    <div class="flex items-center gap-1 text-[10px] text-zillow-blue font-bold">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        Total monthly price
                    </div>
                </div>
                <div class="text-xs font-bold text-slate-800 mb-1">
                    <?php echo $i+1; ?> bds | <?php echo $i; ?> ba | <?php echo 1100 + ($i * 100); ?> sqft | Active
                </div>
                <div class="text-[13px] text-slate-500 truncate">
                    <?php echo 18 + $i; ?> Elizabeth Ln #<?php echo $i; ?>DD, New York, NY
                </div>
                <div class="mt-4 pt-2 border-t border-slate-100 text-[10px] text-slate-400 uppercase tracking-wider font-semibold">
                    Listing provided by Rentor Pro
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</main>

<?php get_footer(); ?>
