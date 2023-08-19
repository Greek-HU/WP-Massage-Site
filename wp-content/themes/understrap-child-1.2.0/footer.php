<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	

				<footer class="site-footer" id="colophon">
					<div class="display-6 text-center main-title-font">Mohács szívében</div>
						<div class="container">
							<div class="map-box">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52735.74638519118!2d18.663456019206823!3d45.99958949326248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742d6b361d59e73%3A0x97b401c6f26315d7!2zTW9ow6Fjcw!5e0!3m2!1shu!2shu!4v1690961957415!5m2!1shu!2shu" width="1920" height="598" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>

					<div class="display-6 text-center main-title-font">Kérjen időpontot!</div>
	
						<div class="appointment container-fluid">
							<div class="row">
							<div class="col-12 input-box">
								<input type="text" id="name" class="form-control" placeholder="Név">
							</div>

							<div class="col-12 input-box">
								<input type="email" id="email" class="form-control" placeholder="Email cím">
							</div>
								<div class="row">
							<div class="col-6 input-box">
								<input type="tel" id="tel" class="form-control" placeholder="Telefonszám">
							</div>

							<div class="col-6 input-box">
                            	<textarea id="query" class="form-control" style="height: 45px;">Üzenet</textarea>
                        	</div></div>
							<div class="mb-4">
                            	<button type="submit" class="sub-btn">Elküldés</button>
                        	</div></div>
						</div>
						<div class="purp-box">
							<div class="text-center num-box">20/3716026</div>
						</div>		
					<div class="site-info text-center">

						<p class="text-align"><?php understrap_site_info(); ?></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

