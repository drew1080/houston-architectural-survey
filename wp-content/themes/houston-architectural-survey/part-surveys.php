<div id="surveys" class="clearfix">		
	<?php const TAXONOMY_FILTER = 'neighborhoods';  ?>
	<?php $page_taxonomys = get_post_meta($post->ID, "_ttrust_page_classifications", true); ?>
	
	<?php if ($page_taxonomys) : // if there are a limited number of taxonomys set ?>
		<?php $taxonomy_slugs = ""; $taxonomys = explode(",", $page_taxonomys); ?>

		<?php if (sizeof($taxonomys) > 1) : // if there is more than one taxonomy, show the filter nav?>	
			<ul id="filterNav" class="clearfix">
				<li class="allBtn"><a href="#" data-filter="*" class="selected"><?php _e('All', 'themetrust'); ?></a></li>

				<?php
				$j=1;					  
				foreach ($taxonomys as $taxonomy) {				
					$taxonomy = get_term_by( 'slug', trim(htmlentities($taxonomy)), TAXONOMY_FILTER);
					if($taxonomy) {
						$taxonomy_slug = $taxonomy->slug;				

						$taxonomy_slugs .= $taxonomy_slug . ",";
		  				$a = '<li><a href="#" data-filter=".'.$taxonomy_slug.'">';
						$a .= $taxonomy->name;					
						$a .= '</a></li>';
						echo $a;
						echo "\n";
						$j++;
					}		  
				}?>
			</ul>
			<?php $taxonomy_slugs = substr($taxonomy_slugs, 0, strlen($taxonomy_slugs)-1); ?>
		<?php else: ?>
			<?php $taxonomy = $taxonomys[0]; ?>
			<?php $s = get_term_by( 'name', trim(htmlentities($taxonomy)), TAXONOMY_FILTER); ?>
			<?php if($s) { $taxonomy_slugs = $s->slug; } ?>
		<?php endif;		
		
		$temp_post = $post;
		$args = array(
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 200,
			'post_type' => 'has_surveys',
			'taxonomy' => $taxonomy_slugs
		);
		$projects = new WP_Query( $args );		

	else : // if not, use all the taxonomys ?>

		<ul id="filterNav" class="clearfix">
			<li class="allBtn"><a href="#" data-filter="*" class="selected"><?php _e('All', 'themetrust'); ?></a></li>
			<?php $j=1;
			$taxonomys = get_terms(TAXONOMY_FILTER);
			foreach ($taxonomys as $taxonomy) {
				$a = '<li><a href="#" data-filter=".'.$taxonomy->slug.'">';
		    	$a .= $taxonomy->name;					
				$a .= '</a></li>';
				echo $a;
				echo "\n";
				$j++;
			}?>
		</ul>
		<?php
		$temp_post = $post;
		$args = array(
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 200,
			'post_type' => 'has_surveys'			
		);
		$projects = new WP_Query( $args );

	endif; ?>
	
	<div class="thumbs masonry">			
	<?php  while ($projects->have_posts()) : $projects->the_post(); ?>
		
		<?php
		global $p;				
		$p = "";
		$taxonomys = get_the_terms( $post->ID, TAXONOMY_FILTER);
		if ($taxonomys) {
		   foreach ($taxonomys as $taxonomy) {				
		      $p .= $taxonomy->slug . " ";						
		   }
		}
		?>  	
		<?php get_template_part( 'part-survey-thumb'); ?>		

	<?php endwhile; ?>
	<?php $post = $temp_post; ?>
	</div>
</div>