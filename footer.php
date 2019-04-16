<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<footer class="footer hero has-text-white">

            <div class="container">
                <div class="columns content">
                    <div class="column is-full-mobile is-two-thirds-tablet">
                        <div class="content has-text-left">
                        <?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
                                'menu_id'        => 'secondary-menu',
                                // 'before'         => '<i class="icon"></i>',
                                'link_before'    => '<span class="icon is-small"><i class="fas fa-chevron-right"></i></span>',
                                'items_wrap'     => '<ul class="is-uppercase has-text-weight-bold">%3$s</ul>',
								// 'container'       => 'div', 
                                // 'container_class' => 'collapse navbar-collapse', 
                                // 'container_id'    => 'navbarCollapse',
                                // 'menu_class'      => 'is-uppercase', 
                                // 'echo'            => true,
                                // 'fallback_cb'     => 'wp_page_menu',
                                // 'depth'           => 0
							) );
							?>
                        </div>
                    </div>
                    <div class="column is-full-mobile is-one-third-tablet ">
                        <div class="content has-text-right-tablet">
                            <img src="<?php echo get_template_directory_uri() ?>/img/dance-footer.jpg" alt="" width="213" height="81">
                        </div>
                    </div>
                </div>
                
                <div class="social">
                    <div>
                        <a class="twitter-follow-button" href="https://twitter.com/MulvihillDance" data-size="small"> Follow @TwitterDev</a>
                    </div>

                    <div class="fb-like" data-href="http://www.mulvihillirishdance.com" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>

                <small class="has-text-centered is-fullwidth is-block is-uppercase">&copy; Site and content copyright ©
                    2010 Mulvihill Irish Dance Academy.</small>

            </div>

            <div class="arrow bounce"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i></div>

        </footer>

<?php wp_footer(); ?>

<script>
        AOS.init({
            duration: 2000, // values from 0 to 3000, with step 50ms
            once: true, // whether animation should happen only once - while scrolling down
            offset: 0, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
        });
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>
</html>
