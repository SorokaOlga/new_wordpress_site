<?php
/**
 * Template part for displaying slider section
 *
 * @package Stationary Bookstore
 * @subpackage stationary_bookstore
 */
?>
<?php $stationary_bookstore_static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'stationary_bookstore_Slider_show_hide') != '') { ?>
<section id="slider-box">
  <div class="owl-carousel">
    <?php 
      $stationary_bookstore_post_category = get_theme_mod('stationary_bookstore_slider_section_category');
      if($stationary_bookstore_post_category){
        $stationary_bookstore_page_query = new WP_Query(array( 'category_name' => esc_html( $stationary_bookstore_post_category ,'stationary-bookstore')));?>
        <?php while( $stationary_bookstore_page_query->have_posts() ) : $stationary_bookstore_page_query->the_post(); ?>
        <div class="cat-inner-box">
          <?php if(has_post_thumbnail()){ ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
                  <?php }else {echo ('<img src="'.$stationary_bookstore_static_image.'">'); } ?>
          <div class="slider-box-content">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h2><?php echo wp_trim_words( get_the_content(), 7 ); ?></h2>
          </div>
        </div>
        <?php endwhile;
        wp_reset_postdata();
      }
    ?>
  </div>
</section> 
<?php }?>