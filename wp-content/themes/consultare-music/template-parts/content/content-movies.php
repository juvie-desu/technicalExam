<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Consultare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-content-wraper">
		<?php consultare_post_thumbnail(); ?>

		<div class="entry-content-wrapper">
			<?php
			$consultare_enable = consultare_gtm( 'consultare_header_image_visibility' );

			if ( ! consultare_display_section( $consultare_enable ) ) : ?>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
				<?php
					echo '<select id="select-film-genre">';
					echo '<option default> Film Genre </option>';
				  	foreach( get_data_genre() as $term ) {
			          echo '<option value="#'.str_ireplace( array( ' ' ), '-', strtolower($term)).'"> '.$term.' </option>';
			    	}
					echo '</select>';

				?>
			</header><!-- .entry-header -->

			<?php endif; ?>

			<div class="entry-content">
			
				<?php
				// the_content();
				echo do_shortcode('[get_data_shortcode term="Movie"]');


				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'consultare' ),
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
		</div><!-- .entry-content-wrapper -->
	</div><!-- .single-content-wraper -->
</article><!-- #post-<?php the_ID(); ?> -->
