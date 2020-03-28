<?php get_header(); ?>

<main class="section">


        <h1 class="entry-title"><?php _e( 'Category Archives: ', 'openvld2020' ); ?><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="article-list-item"><?php get_template_part( 'entry' ); ?></li>
        <?php endwhile; endif; ?>

    <?php get_template_part( 'nav', 'below' ); ?>
</main>

<?php get_footer(); ?>