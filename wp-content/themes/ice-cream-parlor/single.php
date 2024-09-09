<?php
/**
 * The template for displaying all single posts
 *
 * @package Ice Cream Parlor
 * @subpackage ice_cream_parlor
 */

get_header(); ?>
	<?php $ice_cream_parlor_static_image= get_stylesheet_directory_uri() . '/assets/images/header_img.png'; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="external-div">
	        <div class="box-image">
	          	<?php if(has_post_thumbnail()){ 
	            	the_post_thumbnail();
		        }else { ?>
		            <div class="single-page-img"></div>
		        <?php } ?>
	        </div> 
	        <div class="box-text">
	        	<h2><?php the_title();?></h2>  
	        </div> 
		</div>
	<?php endwhile; ?>
	<main id="tp_content" role="main">
		<div class="container">
			<div id="primary" class="content-area">
				<?php
		        $ice_cream_parlor_sidebar_single_post_layout = get_theme_mod( 'ice_cream_parlor_sidebar_single_post_layout','right');
		        if($ice_cream_parlor_sidebar_single_post_layout == 'left'){ ?>
			        <div class="row">
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			          	<div class="col-lg-8 col-md-8 singlepage-main">
			           		<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post');	?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'ice-cream-parlor' ),
							                  	'next_text'          => __( 'Next page', 'ice-cream-parlor' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ice-cream-parlor' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			        </div>
			        <div class="clearfix"></div>
			    <?php }else if($ice_cream_parlor_sidebar_single_post_layout == 'right'){ ?>
			        <div class="row">
			          	<div class="col-lg-8 col-md-8 singlepage-main">	           
				            <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post'); ?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'ice-cream-parlor' ),
							                  	'next_text'          => __( 'Next page', 'ice-cream-parlor' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ice-cream-parlor' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php }else if($ice_cream_parlor_sidebar_single_post_layout == 'full'){ ?>
			        <div class="full">
			           <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'ice-cream-parlor' ),
						                  	'next_text'          => __( 'Next page', 'ice-cream-parlor' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ice-cream-parlor' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
			    <?php }else {?>
			    	<div class="row">
			          	<div class="col-lg-8 col-md-8 singlepage-main">	           
				            <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post'); ?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'ice-cream-parlor' ),
							                  	'next_text'          => __( 'Next page', 'ice-cream-parlor' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ice-cream-parlor' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php } ?>
			</div>
	   </div>
	</main>

<?php get_footer();