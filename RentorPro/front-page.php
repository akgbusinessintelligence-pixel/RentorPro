<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content container">
        <h1 class="hero-title">Find Your Perfect Rental Home</h1>
        <p class="hero-subtitle">Discover premium properties in the most desirable neighborhoods.</p>
        
        <div class="search-box-wrapper glass">
            <div class="search-box">
                <input type="text" placeholder="Location, City, Zip...">
                <select>
                    <option>Property Type</option>
                    <option>Apartment</option>
                    <option>Villa</option>
                    <option>House</option>
                </select>
                <button class="btn btn-primary">Search Now</button>
            </div>
        </div>
    </div>
</section>

<section class="featured-properties container">
    <div class="section-header">
        <h2 class="section-title">Featured Listings</h2>
        <p>Handpicked properties just for you.</p>
    </div>

    <div class="property-grid">
        <!-- Placeholder for plugin content/featured properties -->
        <?php
        // This is where the plugin would typically hook in or we display featured posts
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <div class="property-card glass">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="property-image">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>
                    <div class="property-details">
                        <h3 class="property-title"><?php the_title(); ?></h3>
                        <p class="property-price">$2,500 / month</p>
                        <p class="property-meta">3 Bed • 2 Bath • 1,200 sqft</p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
