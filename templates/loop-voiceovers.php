<?php
    $args   = array(
        'post_type'     => 'voiceover',
        'posts_per_page'=> -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'voiceover_type',
                'field'    => 'slug',
                'terms'    => $type,
            ),
        ),        
    );

    $query  = new \WP_Query( $args );
    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
<?php endwhile; endif;  wp_reset_query(); ?>