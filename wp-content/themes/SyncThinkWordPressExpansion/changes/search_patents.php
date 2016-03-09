<?php
		include('../../../wp-load.php'); 
		$json=$_REQUEST;
		$string = implode(' ', $json);
		$pname= $_POST['pname'];
		//echo $pname; 
				 
					wp_reset_query();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("post_type=post&order=DESC&cat=5&tag=".$pname."&posts_per_page=-1&paged=".$paged);
				while (have_posts()) : the_post(); 
					?>
					<div Class="post <?php $tags = get_the_tags(get_the_id()); foreach($tags as $tag) { echo $tag->slug; echo " "; } ?>">
						<?php $fimage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
							if($fimage) {	?>					
							<div class="outer_brdr"><div class="post_img"><img src="<?php echo $fimage; ?>" alt="" /></div></div>
								<?php }?>
					    <div class="desc">
						    <h3 class="news_hdng"><?php the_title();?></h3>
					    	<span class="src_name"><?php the_field('add_name_of_source');?><strong>|</strong><?php the_field('add_publication_date'); ?></span>
						    <div class="tags"> <strong>Tags |</strong> 
						    <?php  //echo get_the_tag_list('',' ','');  ?>
						    <?php
							$tags = wp_get_post_tags($post->ID);
							  if ($tags) {
								foreach($tags as $tag) {
									echo '<a id="'.$tag -> slug.'" class="patenttag_list" href="#" title="" >' . $tag->name.'</a> ';
								}
							  }
							?>
						    </div>
						</div>
                        <p class="para"><?php 
					$content = get_the_content(); 
							echo substr(strip_tags($content), 0, 350) . '..'; 
						?></p>
						<a href="<?php the_field('add_view_link'); ?>" target="_blank" class="article">Full Article<i><img src="<?php echo get_stylesheet_directory_uri()?>/css/images/arrow.png" alt="" /></i></a>
						<i class="clear_0"></i>
						<span class="dotted_divider"></span>
						</div>
					<?php 
						endwhile; 
						?>	
					
					<div class="pagination">
					<?php 
							if(function_exists('wp_paginate')) 
							{
								wp_paginate();
							}
					?>
                <div class="clear"></div>
					</div>
<?php wp_reset_postdata();?>  
 
