<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content">
        <h1>Rentals. Homes. Agents. Loans.</h1>
        <div class="search-container">
            <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code">
            <button class="search-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </div>
    </div>
</section>

<main class="container listing-section">
    <div class="section-header">
        <div class="header-text">
            <h2>Continue searching for Properties</h2>
            <p>7+ new listings</p>
        </div>
        <div class="carousel-controls">
            <!-- Simplified controls -->
            <button class="btn-circle">&lsaquo;</button>
            <button class="btn-circle">&rsaquo;</button>
        </div>
    </div>

    <div class="property-grid">
        <?php
        // Simulated property cards to match Zillow design
        for($i=1; $i<=4; $i++) :
        ?>
        <div class="property-card">
            <div class="card-image-wrap">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80" alt="Property">
                <span class="badge-apply">Apply Instantly</span>
            </div>
            <div class="card-info">
                <div class="price-row">
                    <span class="price">$<?php echo number_format(1800 + ($i * 150)); ?></span>
                    <div class="monthly-wrap">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        Total monthly price
                    </div>
                </div>
                <div class="details-row">
                    <?php echo $i+1; ?> bds | <?php echo $i; ?> ba | <?php echo 1100 + ($i * 100); ?> sqft | Active
                </div>
                <div class="address-row">
                    <?php echo 18 + $i; ?> Elizabeth Ln #<?php echo $i; ?>DD, New York, NY
                </div>
                <div class="agent-row">
                    Listing provided by Rentor Pro
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</main>

<?php get_footer(); ?>
