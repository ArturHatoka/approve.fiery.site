<?php
$post_id = $post->ID;
?>

<header class="entry-header">

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</header><!-- .entry-header -->

<?php echo get_the_post_thumbnail($post_id , 'medium' ); ?>

<div class="entry-content">

	<?php the_content(); ?>

	<?php
    $all_tax = get_object_taxonomies( $post, $output = 'names' );
    $cur_taxes = array_keys (get_the_taxonomies( $post_id ));
    foreach ($all_tax as $tax){
        if (in_array($tax, $cur_taxes)){
	        $cur_tax = $tax;
        }
    }
    if (isset($cur_tax)){
	    $cur_term = wp_get_post_terms( $post_id, $cur_tax);
	    foreach($cur_term as $term){
		    $term_id = $term->term_id;
	    }
	    $posts_in_terms = get_objects_in_term( $term_id, $cur_tax );
	    query_posts(array(
		    'post__in' => $posts_in_terms,
		    'post_type' => 'realty',
		    'posts_per_page' => 10,
		    'order' => 'ASC',
	    ));

        if( have_posts() ){ ?>
        <div class="d-flex w-100 flex-wrap justify-content-around">
           <? while( have_posts() ){
                the_post();
	            get_template_part( 'loop-templates/content', 'realty');
            } ?>
        </div>
           <? wp_reset_query();
        }
    }
	?>

</div><!-- .entry-content -->

<footer class="entry-footer">

	<?php understrap_entry_footer(); ?>

</footer><!-- .entry-footer -->
