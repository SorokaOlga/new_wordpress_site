<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ice Cream Parlor
 * @subpackage ice_cream_parlor
 */

?>
<article class="col-lg-4 col-md-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="page-box mt-4">
	        <div class="box-image ">
	            <?php the_post_thumbnail();  ?>
	        </div>
		    <div class="box-content text-center">
		    	<h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
		        <div class="box-info">
			        <?php $ice_cream_parlor_blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
			        foreach ($ice_cream_parlor_blog_archive_ordering as $ice_cream_parlor_blog_data_order) : 
			            if ('date' === $ice_cream_parlor_blog_data_order) : ?>
				            	<i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
				            <?php elseif ('author' === $ice_cream_parlor_blog_data_order) : ?>
			              		<i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
				            <?php elseif ('comment' === $ice_cream_parlor_blog_data_order) : ?>
			              		<i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'ice-cream-parlor'), __('0 Comments', 'ice-cream-parlor'), __('% Comments', 'ice-cream-parlor')); ?></span>
				            <?php elseif ('category' === $ice_cream_parlor_blog_data_order) :?>
			              		<i class="fas fa-list mb-1"></i><span class="entry-category"><?php ice_cream_parlor_display_post_category_count(); ?></span>
				            <?php endif;
			        endforeach; ?>
		        </div>
		        <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('ice_cream_parlor_excerpt_count',35) );?></p>
	        	<?php if(get_theme_mod('ice_cream_parlor_remove_read_button',true) != ''){ ?>
		            <div class="readmore-btn">
		                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'ice-cream-parlor' ); ?>"><?php echo esc_html(get_theme_mod('ice_cream_parlor_read_more_text',__('Read More','ice-cream-parlor')));?></a>
		            </div>
	        	<?php }?>
		    </div>
		    <div class="clearfix"></div>
		</div>
	</div>
</article>