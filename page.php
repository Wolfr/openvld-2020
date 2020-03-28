<?php get_header(); ?>

<main class="c-main">
    <section class="c-basic-page">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="c-content">
                <h1 class="c-h1"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php edit_post_link(); ?>
            </div>
        <?php endwhile; endif; ?>

    </section>
</main>

<?php get_footer(); ?>