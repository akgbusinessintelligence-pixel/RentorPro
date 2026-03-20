<?php get_header(); ?>

<main class="container mx-auto px-4 py-12 max-w-4xl">
    <div class="prose prose-slate max-w-none">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12 pb-8 border-b border-slate-100 last:border-0' ); ?>>
                    <header class="mb-6">
                        <?php the_title( '<h1 class="text-3xl font-bold text-slate-900 mb-2">', '</h1>' ); ?>
                        <div class="text-sm text-slate-400">Published on <?php echo get_the_date(); ?></div>
                    </header>
                    <div class="text-slate-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <div class="text-center py-20">
                <h2 class="text-2xl font-bold text-slate-900 mb-4"><?php esc_html_e( 'Nothing Found', 'rentor-modern-elite' ); ?></h2>
                <p class="text-slate-500 text-sm"><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'rentor-modern-elite' ); ?></p>
            </div>
            <?php
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
