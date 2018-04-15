<?php
/**
 *
 * @package WordPress
 * @subpackage Sarah Ford
 * @since Sarah Ford 1.0
 */

get_header(); ?>
    <section class="opening">
        <article>
            <?php 
                $res    = get_page_by_title( 'Introduction', OBJECT, 'post' );
                echo apply_filters( 'the_content', $res->post_content );
            ?>
        </article>
    </section>
    <section class="voiceover">
        <a id="vo-demos"></a> 
        <div class="vo-wrapper">
            <?php 
                $type   = 'demo';
                include( locate_template( 'templates/loop-voiceovers.php' ) );
            ?>
        </div>
        <div class="toTop"><a href="#top">Top</a></div>
    </section>
    <section class="testimonial">
        <article>
            <?php
                $res    = \Posts\getPostsByType( 'testimonial', 1, 0 );
                echo reset( $res  );
            ?>
        </article>
    </section>
    <section class="voiceover">
        <a id="vo-videos"></a> 
        <div class="vo-wrapper">
            <?php 
                $type   = 'video';
                include( locate_template( 'templates/loop-voiceovers.php' ) );
            ?>
        </div> 
        <div class="toTop"><a href="#top">Top</a></div>       
    </section>   
    <section class="testimonial">
        <article>
            <?php
                $res    = \Posts\getPostsByType( 'testimonial', 1, 1 );
                echo reset( $res  );
            ?>    
        </article>
    </section>      
    <section class="clients">
        <a id="clients"></a>
        <article>
            <?php
                $res    = get_page_by_title( 'Clients' );
                echo apply_filters( 'the_content', $res->post_content );
            ?>
        </article>
        <div class="toTop"><a href="#top">Top</a></div>
    </section>
    
<?php get_footer(); ?>