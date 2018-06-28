<?php
/**
 * Template part for displaying partial content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hotel_Adria
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<figure class="entry-partial-figure">
	<?php hotel_adria_post_thumbnail(); ?>
</figure>

	

	<div class="entry-partial-content">
	<header class="entry-partial-header">

		<?php the_title( '<h3 class="entry-partial-title">', '</h3>' ); ?>
	</header><!-- .entry-header -->
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hotel-adria' ),
			'after'  => '</div>',
		) );
		?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-partial-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'hotel-adria' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
