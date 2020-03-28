<?php get_header(); ?>

<main class="c-main">

    <div class="c-basic-page">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <p><a href="/artikels/" class="c-a c-a--swap-underlines">&larr; Terug naar alle artikels</a></p>

            <article class="c-single-article">
                <header>
                    <h1><?php the_title(); ?></h1>
                    <p><time><?php the_time( get_option( 'date_format' ) ); ?></time></p>
                </header>

                <div class="c-content">
                    <?php the_content(); ?>
                </div>

                <footer class="c-about-author">
                    <div class="c-about-author-image">
                        <img src="<?php bloginfo('template_directory') ?>/images/christian-small-2.jpg">
                    </div>
                    <div class="c-about-author-content">
                        <div class="c-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <ul class="c-social-list">
                            <li>
                                <a href="https://twitter.com/username" target="_blank" rel="noopener">
                                    <img src="<?php bloginfo('template_directory') ?>/images/twitter-medium-blue.svg" alt="">
                                    <span class="bp1-inline-hide">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/username/" target="_blank" rel="noopener">
                                    <img src="<?php bloginfo('template_directory') ?>/images/facebook-medium-blue.svg" alt="">
                                    <span class="bp1-inline-hide">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/username/" target="_blank" rel="noopener">
                                    <img src="<?php bloginfo('template_directory') ?>/images/instagram-medium-blue.svg" alt="">
                                    <span class="bp1-inline-hide">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </footer>

            </article>


        <?php endwhile; endif; ?>

    </div>
</main>

<?php get_footer(); ?>