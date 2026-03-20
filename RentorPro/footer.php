<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-info">
            <h3 class="footer-logo"><?php bloginfo( 'name' ); ?></h3>
            <p><?php bloginfo( 'description' ); ?></p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
            ) );
            ?>
        </div>
        <div class="footer-contact">
            <h4>Contact Info</h4>
            <p>123 Luxury Lane, Real Estate City</p>
            <p>Email: contact@rentorpro.com</p>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
