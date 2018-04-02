<?php
/**
 * @package WordPress
 * @subpackage Sarah_Ford
 * @since Sarah Ford 1.0
 */
?>
        </main>
    </div><!-- end container -->
    <footer>
        <section class="contact">
            <a id="contact"></a> 
            <article>
                <?php
                    $res    = get_page_by_title( 'Contact' );
                    echo apply_filters( 'the_content', $res->post_content );
                ?> 
            </article>       
        </section>    
        <?php wp_footer(); ?>
    </footer>
</body>
</html>