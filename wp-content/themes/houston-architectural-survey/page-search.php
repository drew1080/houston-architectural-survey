<?php /*
Template Name: Search Page
*/ ?>
<?php get_header(); ?>
<?php $blog_full_width = of_get_option('ttrust_post_full_width'); ?>
<?php $bw = ($blog_full_width) ? "full" : "twoThirds"; ?>

<?php if(!is_front_page()):?>
<div id="pageHead">
	<h1><?php the_title(); ?></h1>
	<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
	<?php if ($page_description) : ?>
		<p><?php echo $page_description; ?></p>
	<?php endif; ?>				
</div>
<?php endif; ?>
<div id="content" class="<?php echo $bw; ?>">
  <?php get_search_form(); ?>
	<?php while (have_posts()) : the_post(); ?>	
	<div class="inside">
	<?php the_content(); ?>	
	</div>
	<?php endwhile; ?>	
</div>
<?php if($bw == "twoThirds") get_sidebar(); ?>	

<?php get_footer(); ?>
