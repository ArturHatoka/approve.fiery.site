<?php
/**
 * Search results partial template.
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

		<?php if ( 'realty' == get_post_type() ) : ?>

            <ul class="entry-meta pt-3 d-flex wrap pl-0">
				<?php $post_meta = get_post_meta($post->ID);?>
                <li class="mx-3">
                    Площадь: <?=$post_meta['площадь'][0]?> м<sup>2</sup>.
                </li>
                <li class="mx-3">
                    Стоймость: <?=$post_meta['стоимость'][0]?> руб.
                </li>
                <li class="mx-3">
                    Жилая площадь: <?=$post_meta['жилая_площадь'][0]?> м<sup>2</sup>.
                </li>
                <li class="mx-3">
                    Адрес: <?=$post_meta['адрес'][0]?>.
                </li>
				<?php if (isset($post_meta['этаж'][0])){?>
                    <li class="mx-3">
                        Этаж: <?=$post_meta['этаж'][0]?>.
                    </li>
				<?php }?>
            </ul><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
