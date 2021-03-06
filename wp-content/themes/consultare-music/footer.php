<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Consultare
 */

	$show_content = consultare_gtm( 'consultare_show_homepage_content' );

	if ( $show_content || ! is_front_page() ) : ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- #content -->
	<?php endif; ?>

		<?php do_action( 'consultare_after_content' ); ?>

		<?php get_template_part( 'template-parts/sticky-playlist/sticky-playlist' ); ?>

		<footer id="colophon" class="site-footer footer-color-scheme-dark">
			<?php get_template_part( 'template-parts/footer/footer', 'widget' ); ?>

			<?php get_template_part( 'template-parts/footer/site-info' ); ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<div id="scrollup" class="displaynone">
		<a title="<?php echo esc_attr__( 'Go to Top', 'consultare-music' ); ?>" class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
	</div>

	<?php wp_footer(); ?>
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script type="text/javascript">

 	
 	jQuery( document ).ready(function($) {
	 var swiper = new Swiper(".mySwiper", {
	 	initialSlide: 2,
	 	// centeredSlides: true,
        slidesPerView: 8,
        spaceBetween: 20,
        loop: true,
        // pagination: {
        //   el: ".swiper-pagination",
        //   clickable: true,
        // },
         navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });



	});


 </script>
</body>
</html>
