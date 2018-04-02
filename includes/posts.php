<?php

namespace Posts;

add_action( 'init', '\Posts\register' );

function register()
{

}

function getPostsByType( $type='post', $limit=1, $offset=0 )
{
	$args	= array(
		'post_type'			=> $type,
		'posts_per_page'	=> $limit,
		'offset'			=> $offset
	); 
	$query	= new \WP_Query( $args );
	$o		= array();
	if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
		$o[]	= the_content();
	endwhile; endif; wp_reset_query(); 
	return $o;
}

