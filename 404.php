<?php get_header(); ?> ?>

<?php while ( have_posts() ) : the_post(); ?>

<article>
	<header>
		<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'jumptstart' ); ?></h1>
	</header>
	<div class="entry">
		<p><?php _e( 'Sorry, something went wrong.', 'jumptstart' ); ?></p>
	</div>
</article>

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>