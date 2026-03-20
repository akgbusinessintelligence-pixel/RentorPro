<footer class="bg-slate-900 text-white mt-12 py-12 mb-16 md:mb-0">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div>
                <h3 class="text-xl font-bold mb-4"><?php bloginfo( 'name' ); ?></h3>
                <p class="text-slate-400 text-sm"><?php bloginfo( 'description' ); ?></p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-slate-200">Quick Links</h4>
                <div class="flex flex-col gap-2 text-sm text-slate-400">
                    <a href="#" class="hover:text-white">Buy</a>
                    <a href="#" class="hover:text-white">Rent</a>
                    <a href="#" class="hover:text-white">Sell</a>
                    <a href="#" class="hover:text-white">Home Loans</a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4 text-slate-200">Contact Us</h4>
                <p class="text-slate-400 text-sm mb-2">123 Real Estate Ave, Luxury District</p>
                <p class="text-slate-400 text-sm">Email: contact@rentorpro.com</p>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 text-center text-xs text-slate-500">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Mobile Bottom Navigation Bar -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-100 z-[100] h-16 flex items-center justify-around px-4 shadow-[0_-4px_10px_rgba(0,0,0,0.05)]">
    <a href="<?php echo home_url(); ?>" class="bottom-nav-item active">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="mb-0.5"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
        <span>Home</span>
    </a>
    <a href="#" class="bottom-nav-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-0.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <span>Search</span>
    </a>
    <a href="#" class="bottom-nav-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-0.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        <span>Saved</span>
    </a>
    <button id="open-drawer-bottom" class="bottom-nav-item">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mb-0.5"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        <span>Menu</span>
    </button>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const bottomMenuBtn = document.getElementById('open-drawer-bottom');
    if(bottomMenuBtn) {
        bottomMenuBtn.addEventListener('click', function() {
            document.getElementById('open-drawer').click();
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
