<footer class="bg-slate-900 text-white mt-12 py-12">
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
                <div class="flex gap-4 mt-6">
                    <!-- Placeholder social icons -->
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-slate-700 transition-colors">f</div>
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-slate-700 transition-colors">t</div>
                    <div class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center cursor-pointer hover:bg-slate-700 transition-colors">i</div>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 text-center text-xs text-slate-500">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
