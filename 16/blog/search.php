<?php get_header(); ?>

<main>
    <h1>Search results: <?php echo get_search_query(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Learn more</a></p>
    </article>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>