<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iih
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="entry-content">
   
	<header class="entry-header">
 
		<?php the_title( sprintf( '<strong><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></strong>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php iih_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	</div>
</article><!-- #post-## -->
