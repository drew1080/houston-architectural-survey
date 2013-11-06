<?php /*
Template Name: Survey Page
*/ ?>
<?php get_header(); ?>

<?php if(!is_front_page()):?>
<div id="pageHead">
	<h1><?php the_title(); ?></h1>
	<?php while (have_posts()) : the_post(); ?>	
	<div class="inside survey-links">
	<?php the_content(); ?>	
	</div>
	<?php endwhile; ?>	
	<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
	<?php if ($page_description) : ?>
		<p><?php echo $page_description; ?></p>
	<?php endif; ?>				
</div>
<?php endif; ?>
<div id="content" class="full">
<?php get_template_part( 'part-surveys'); ?>
</div>

<?php get_footer(); ?>
