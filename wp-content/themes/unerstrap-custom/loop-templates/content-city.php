<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header text-center">

		<?php
		the_title(
			sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->
    <div class="entry-content mb-3">
	    <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
    </div>

</article><!-- #post-## -->
