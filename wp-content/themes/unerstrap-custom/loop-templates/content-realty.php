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

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

	<div class="entry-content">

        <ul class="entry-meta pt-3 pl-3">
			<?php $post_meta = get_post_meta($post->ID);?>
            <li>
                Площадь: <?=$post_meta['площадь'][0]?> м<sup>2</sup>.
            </li>
            <li>
                Стоймость: <?=$post_meta['стоимость'][0]?> руб.
            </li>
            <li>
                Жилая площадь: <?=$post_meta['жилая_площадь'][0]?> м<sup>2</sup>.
            </li>
            <li>
                Адрес: <?=$post_meta['адрес'][0]?>.
            </li>
			<?php if (isset($post_meta['этаж'][0])){?>
                <li>
                    Этаж: <?=$post_meta['этаж'][0]?>.
                </li>
			<?php }?>
        </ul><!-- .entry-meta -->

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer mb-3">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
