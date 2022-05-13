<footer class="site-footer">
    <div class="row footer-row">
        <div class="col-lg-12 paragraph-footer">
            <div>
                Copyright ©
                <a href="<?php get_site_url() ?>">
                    <?php bloginfo( 'copyright' ); ?>
                </a>
                |
            </div>
            <div>
                <?php wp_nav_menu( [ 'theme_location' => 'footer' ] ) ?>
            </div>
        </div>
    </div>
</footer>


</div> <!-- closes <div class=container"> -->

<!-- <?php wp_footer() ?> -->
</body>


</html>