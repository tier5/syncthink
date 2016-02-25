<?php
/**
 * Template Name: Team Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

         <section class="our_team_wrap">
                <div class="inner_container">
                    <div class="team_hdng">
                        <h3><?php the_field('add_title');?></h3>
                        <p><?php the_field('add_content');?> </p>
                    </div>
                </div>
                <div class="team_bnr">
                    <img src="<?php the_field('add_banner');?>" alt="" />
                </div>
                <span class="team_bnr_caption"><?php the_field('add_banner_title');?></span>
        </section>
        
        <section class="loc_wrap">
            <div class="inner_container">
                <h3><?php the_field('add_sub_title');?></h3>
                <p><?php the_field('add_sub_content');?></p>
            </div>
            <div class="headq_wrap">
			 <?php if(get_field('headquarterss_map')):  while(the_repeater_field('headquarterss_map')): ?>
                <div class="country_wrap">
                   <div class="map_title">
                        <strong>Headquarters</strong>
                        <h3><?php the_sub_field('add_headquarterss_title');?></h3>
                    </div>
                    <div class="map">
                        <iframe src="<?php the_sub_field('add_map');?>" width="100%" height="569" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                 <i class="clear_0"></i>
            </div>
        </section>
        
        <section class="team_wrap">
            <div class="inner_container">
                <div class="team_cnt">
                    <h3><?php the_field('add_team_section_title');?></h3>
                    <p><?php the_field('add_team_section_content');?></p>
                </div>
                <ul class="profile_wrap">
				
                    <?php  if(get_field('team_member_detail')) :  $i=1; while(the_repeater_field('team_member_detail')): ?>
                     <li class="profile <?php if($i==3 || $i==6 || $i==9 || $i==12 || $i==15 || $i==18){ echo"last"; } ?> >
                        <span class="t_img"><img src="<?php the_sub_field('add_image');?>" alt="" /></span>
                        <h4><?php the_sub_field('add_name');?></h4>
                        <span class="jd"><?php the_sub_field('add_job_title');?></span>
                        <p><?php the_sub_field('add_content');?></p>
                    </li>
                     <?php  $i++; endwhile;  endif; ?>
                     <i class="clear_0"></i>
                </ul>
            </div>
        </section>
	</div><!-- /.container -->
</div><!-- /.wrapper -->


		
<?php

get_footer(team);
?>
