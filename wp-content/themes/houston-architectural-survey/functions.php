<?php
define('child_template_directory', get_stylesheet_directory_uri() );

wp_enqueue_script('theme_trust_js', child_template_directory . '/js/theme_trust.js', array('jquery'), '1.0', true);
wp_enqueue_script('has', child_template_directory . '/js/has.js', array('jquery'), '1.0', true);

include("widgets/taxonomy-dropdown.php");

function has_custom_taxonomy_dropdown( $taxonomy, $taxonomy_singular_name, $class = 'taxonomy-dropdown', $orderby = 'date', $order = 'DESC', $limit = '-1') {
	$args = array(
		'orderby' => $orderby,
		'order' => $order,
		'number' => $limit,
	);
	$terms = get_terms( $taxonomy, $args );
	$name = ( $name ) ? $name : $taxonomy;
	if ( $terms ) {
		printf( '<select name="%s" class="postform %s taxonomy-%s">', esc_attr( $name ), $class, $taxonomy );
    
		printf( '<option value="0">%s</option>', 'Select ' . $taxonomy_singular_name );

		foreach ( $terms as $term ) {
			printf( '<option value="%s">%s</option>', esc_attr( get_term_link( $term ) ), esc_html( $term->name ) );
		}
		print( '</select>' );
	}
}
?>