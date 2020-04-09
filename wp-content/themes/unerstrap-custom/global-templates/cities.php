<?php
global $query_string;
parse_str($query_string, $args);
$post_type = 'city';
$args['post_type'] = $post_type;
query_posts( $args );

if ( have_posts() ) : ?>
	<div class="d-flex w-100 flex-wrap justify-content-between">
	<?php /* Start the Loop */ ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', $post_type ); ?>

	<?php endwhile; ?>
	</div>
<?php else : ?>

	<?php get_template_part( 'loop-templates/content', 'none' ); ?>

<?php endif; ?>