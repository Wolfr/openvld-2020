<?php get_header(); ?>

<main id="content">
    <header class="header">
        <h1 class="entry-title"><?php _e( 'Tag Archives: ', 'openvld2020' ); ?><?php single_tag_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>