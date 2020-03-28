<?php get_header(); ?>

<main class="c-main">

    <section class="c-basic-page">

        <h1 class="c-h1">Artikels</h1>

        <ul class="c-article-list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="c-button c-button--secondary">Lees volledig artikel</a></p>
                </li>
            <?php endwhile; endif; ?>
        </ul>

        <?php get_template_part( 'nav', 'below' ); ?>

    </section>
</main>

<?php get_footer(); ?>