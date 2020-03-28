<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<main class="c-main c-main--home">

    <section class="c-home-articles-list">

        <h3 class="c-h2">Artikels</h3>

        <ul class="c-articles-columns-list">
            <?php

                $args = array(
                    'posts_per_page'    => 4,
                    'post_type'     => 'post',  //choose post type here
                    'order' => 'DESC',
                );
                // query
                $the_query = new WP_Query( $args );


                if( $the_query->have_posts() ):
                    while( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <li>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="c-button c-button--secondary">Lees volledig artikel</a></p>
                </li>
            <?php
                    endwhile;
                else :

                endif;

              wp_reset_query();
            ?>

        </ul>
    </section>

</main>

<?php get_footer(); ?>