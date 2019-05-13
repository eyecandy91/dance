<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 * 
 * Template Name: Press page
 */

get_header();
?>

<section class="hero section"
        <?php if( get_field('press_bg') ): ?>
            style="background-image: url(<?php the_field('press_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container small">
                    <div class="columns is-tablet">

                        <div data-aos="fade-right" class="column has-text-white">
                            <div class="column-is-centered content ">
                                <?php if( get_field('press_title') ): ?>
                                    <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile has-text-primary is-uppercase has-text-centered">
                                        <?php the_field('press_title'); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php
                                if( '' !== get_post()->post_content ) {?>
                                    <div class="content">
                                    <?php
                                    while ( have_posts() ) :
                                        the_post();

                                        the_content();

                                    endwhile; // End of the loop.
                                    ?>
                                    </div>
                               <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </section>

<?php
get_footer();
