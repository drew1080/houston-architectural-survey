<?php $home_survey_count = intval(of_get_option('ttrust_home_survey_count')); ?>
<?php if($home_survey_count > 0) : ?>	
<div id="surveys" class="full homeSection clearfix">
	<div class="sectionHead">				
	<h3><span><?php echo of_get_option('ttrust_recent_surveys_title'); ?></span></h3>
	<p><?php echo of_get_option('ttrust_recent_surveys_description'); ?></p>	
	</div>	
	<?php
	if(of_get_option('ttrust_home_survey_type') == "featured") : //Show only featured surveys 
		$args = array(
			'ignore_sticky_posts' => 1,
			'meta_key' => '_ttrust_survey_featured',
			'meta_value' => true,    			
    		'posts_per_page' => $home_survey_count,
    		'post_type' => array(				
				'has_surveys'					
				)
			);			
	else:
		$args = array(
			'ignore_sticky_posts' => 1,			  			
    		'posts_per_page' => of_get_option('ttrust_home_survey_count'),
    		'post_type' => array(				
				'has_surveys'					
				)
		);	
	endif;
	?>		
	<?php $surveys = new WP_Query( $args ); ?>				
	<div class="thumbs clearfix">			
		<?php  while ($surveys->have_posts()) : $surveys->the_post(); ?>		
			<?php get_template_part( 'part-survey-thumb'); ?>
		<?php 
    endwhile; 
    wp_reset_postdata();
    ?>
				
	</div>
</div>
<?php endif; ?>