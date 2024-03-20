<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>
        <h2><?php the_title(); ?></h2>
        <h3>Written by <?php the_author(); ?></h3>
        <h4>Published on <?php echo get_the_date(); ?></h4>
        <?php the_content(); ?>
    </article>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>
    