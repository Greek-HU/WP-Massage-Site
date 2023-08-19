
<?php
/*
Template Name: MainPageTemplate
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$postslist = get_posts(array('category' => get_cat_ID("Kiemelt szolgáltatások"), 'post_type' =>  'post'));
?>
<div class="top-img">
<img src="/eletfaja/wp-content/uploads/2023/07/Image 1.png" style="width: 1920px; height: 100%;" alt=""></div>
<div class="wrapper" id="page-wrapper">
	<div class="display-6 text-center main-title-font">Szolgáltatásaink</div>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			//get_template_part( 'global-templates/left-sidebar-check' );

			?>

			<main class="site-main" id="main">
				
				
	
					<?php 
						foreach($postslist as $post) {
							for($i=0; $i < $post; $i++){
							echo '<div class="post-content row ">';

								echo '<div class="post col-md-6"';	
									preg_match_all('/<p>(.*?)<\/p>/', $post->post_content, $paragraphs);
									preg_match('/<img[^>]+src=["\']?([^"\']+)["\']?/i', $post->post_content, $matches);
										$image_url = $matches[1];
										if (isset($paragraphs[0]) && !empty($paragraphs[0])) {
									
											echo '<div class="post_text">';
												echo '<div class="display-6 align-items-end content-title">';
													echo ($post->post_title);
												echo '</div>';
											foreach ($paragraphs[0] as $paragraph) {
												echo $paragraph;
											}
											echo '<div class=" d-flex align-items-end flex-column mb-3">';
												echo '<div class="btn btn-danger btn-custom ">Bővebben</div>';
											echo '</div>';	
											echo '</div>'; // post-text záró

											echo '<figure class="col-md-6 ">';
												if ($image_url) {
													echo '<img src="' . $image_url . '" alt="Kép">';
												}
											echo '</figure>';
											
										}
									
								echo '</div>'; // post záró
							echo '</div>'; // post-content záró			
						}  
						
					}
					?>
				
			</main>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
