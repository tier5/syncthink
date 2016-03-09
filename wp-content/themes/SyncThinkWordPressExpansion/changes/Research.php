<?php
/**
 * Template Name: Research Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 
  <section class="reserach_wrap archive">
                <div class="inner_container">
                    <div class="news_wrapper">
                        <h3> <span class="icon"><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/icon2.png" alt="" /></span>Research Archives</h3>
						<span class="dotted_divider"></span>
						<?php
	$i = 0;
	query_posts('category_name=research');
	if (have_posts()) : 
		while (have_posts()) : 
			the_post();
			$posttags = get_the_tags();
			if ($posttags) {
				
				foreach($posttags as $tag) {

					$all_tags_arr[$i][] = $tag -> name;
					$all_tags_arr[$i][] = $tag -> term_id;
						$all_tags_arr[$i][] = $tag -> slug;
					
					//USING JUST $tag MAKING $all_tags_arr A MULTI-DIMENSIONAL ARRAY, WHICH DOES WORK WITH array_unique
					$i =$i+1;
				}
			}
			
		endwhile; 
	endif; 

	$tags_arr = array_unique($all_tags_arr, SORT_REGULAR); //REMOVES DUPLICATES

	
?>	<div class="currentsTags">
	
		<strong>Currents tags</strong> |
			<a href="" id="" class="active">Select All</a> 
				<?php foreach( $tags_arr as $tag) :  ?>
			<a href="#" id="<?php echo $tag[2]; ?>" class="tag_list" name ="<?php echo $tag[2]; ?>" class="cur_tag">
				<?php echo $tag[0]; ?>
			</a> 
		<?php endforeach; ?>
		<input type='text' id="all_val">
	</div>
	<div id="default_list">
						<?php 
						wp_reset_query();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 2;
				query_posts("post_type=post&order=DESC&cat=6&posts_per_page=-1&paged=".$paged);
				while (have_posts()) : the_post(); 
					?>
				<div Class="post <?php $tags = get_the_tags(get_the_id()); foreach($tags as $tag) { echo $tag->slug; echo " "; } ?>">
                        <h3 class="news_hdng"><?php the_title();?></h3>
                        <span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_field('add_publication_date'); ?></span>
						<div class="tags"> <strong>Tags |</strong> 
						<?php  //echo get_the_tag_list('',' ','');  ?>
						<?php
							$tags = wp_get_post_tags($post->ID);
							  if ($tags) {
								foreach($tags as $tag) {
									echo '<a id="'.$tag -> slug.'" class="tag_listresarch" href="#" title="" >' . $tag->name.'</a> ';
								}
							  }
							?>
						</div>
                        <p class="para"><?php 
							$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . '..'; 
						?></p>
                        <a href="<?php the_field('add_view_link'); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>

                        <span class="dotted_divider"></span>
						</div>
						<?php 
						endwhile; 
						?>
						<div class="clearBoth"></div>
					</div>
					<div class="pagination">
					<?php 
							if(function_exists('wp_paginate')) 
							{
								wp_paginate();
							}
					?>
                <div class="clear"></div>
            </div>
				</div>
				<div id="current_list"></div>
				</div>
				
		
	</section>	
<?php

get_footer(team);
?>
