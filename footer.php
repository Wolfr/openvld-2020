    <footer class="c-footer">
        <ul>
            <li>©<?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></li>
            <li><a href="/disclaimer-privacy/">Disclaimer & Privacy</a></li>
            <li class="c-nav-icon bp3-ib-hide">
                <a href="https://twitter.com/username" target="_blank" rel="noopener">
                    <img src="<?php bloginfo('template_directory') ?>/images/twitter-muted.svg" alt=""> Twitter
                </a>
            </li>
            <li class="c-nav-icon bp3-ib-hide">
                <a href="https://www.facebook.com/username/" target="_blank" rel="noopener">
                    <img src="<?php bloginfo('template_directory') ?>/images/facebook-muted.svg" alt=""> Facebook
                </a>
            </li>
            <li class="c-nav-icon bp3-ib-hide">
                <a href="https://instagram.com/username/" target="_blank" rel="noopener">
                    <img src="<?php bloginfo('template_directory') ?>/images/instagram-muted.svg" alt=""> Instagram
                </a>
            </li>
        </ul>
    </footer>

    <?php wp_footer(); ?>

     <?php if (! is_front_page() ) { ?>
        <script src="<?php bloginfo('template_directory') ?>/js/scripts.js"></script>
    <?php } ?>

</body>
</html>