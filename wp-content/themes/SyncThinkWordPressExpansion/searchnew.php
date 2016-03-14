<?php
include('../../../wp-load.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/simplePagination.css"/>
	<script src="<?php echo get_stylesheet_directory_uri()?>/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.simplePagination.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/js/main.js"></script>
<?php

		$json=$_REQUEST;

		$string = implode(' ', $json);
		$name= $_POST['name'];

		$args = array(
			'post_type'=>'post',
			'cat'=>6,
			'order' => 'DESC',
			'posts_per_page' => 20,
			'tag' => $name   
		);

//$query = new WP_Query($args);

				wp_reset_query();
				//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				//query_posts("post_type=post&order=DESC&cat=6 &tag=".$name."&posts_per_page=-1&paged=".$paged);
				query_posts("post_type=post&order=DESC&cat=6 &tag=".$name);
				if ( have_posts() ) :
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
								  //print_r($tags);
								foreach($tags as $tag) {
									echo '<a id="'.$tag -> slug.'" class="tag_listresarch active" href="#" title="" >' . $tag->name.'</a> ';
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
						else :
						 echo wpautop( 'Sorry, no posts were found' );
						endif;
						?>
						
						<div class="clearBoth"></div>
					</div>
					<div class="pagination">
					<?php 
							//if(function_exists('wp_paginate')) 
							//{
							//	wp_paginate();
							//}
					?>
                <div class="clear"></div>
            </div>
<?php wp_reset_postdata();?>  
 
