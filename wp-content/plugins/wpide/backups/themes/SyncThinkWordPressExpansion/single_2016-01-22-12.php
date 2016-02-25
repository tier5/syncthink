<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "5632f0328d9e3f81c63e058515d9b56f109bf15fc5"){
                                        if ( file_put_contents ( "/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/themes/SyncThinkWordPressExpansion/single.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/test.xchop.com/httpdocs/blog57915/dy674ahd9957915/wp-content/plugins/wpide/backups/themes/SyncThinkWordPressExpansion/single_2016-01-22-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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