<header class="entry-header">

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	<ul class="entry-meta">
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

</header><!-- .entry-header -->

<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

<div class="entry-content">

	<?php the_content(); ?>

	<?php
	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		)
	);
	?>

</div><!-- .entry-content -->

<footer class="entry-footer">

	<?php understrap_entry_footer(); ?>

</footer><!-- .entry-footer -->