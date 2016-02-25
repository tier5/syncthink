<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <section class="article_wrap">
                <div class="inner_container">
                    <div class="news_wrapper">
	
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();


				<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
			  
							
						if($fimage) {	?>					
				
                                <div class="outer_brdr"><div class="post_img"><a href="#"><img src="<?php echo $fimage; ?>" alt="" /></div></div>
								<?php }?>
				 <h1><?php the_title();?></h1>
					<?php the_content();?>
					
				endwhile;
			?>

			?>
		</div>
                </div>
        </section>
<?php

get_footer();

?>