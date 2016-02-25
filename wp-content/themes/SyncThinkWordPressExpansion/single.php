<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	 
 <section class="article_wrap sPage">
                <div class="inner_container">
                    <div class="news_wrapper">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>
				<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 	?>	
			  
				<h1>			
					<?php	if($fimage) {	?>		
				
				<span class="icon"><img src="<?php echo $fimage; ?>	" alt="" />	</span>
				<?php }?>                              
								
					<?php the_title();?></h1>
					<span class="src_name"><?php the_field('add_name_of_source');?> <strong>|</strong><?php the_field('add_publication_date'); ?></span>
					<div class="tags"> <strong>Tags |</strong> <?php  echo get_the_tag_list('',' ','');  ?></div>
					<?php the_content();?>
					
				<?php endwhile;
			?>
		</div>
		<div class="clearBoth"></div>
                </div>
        </section>
<?php

get_footer();
?>