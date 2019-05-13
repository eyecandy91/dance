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
 * Template Name: gallery page
 */

get_header();
?>

<section class="hero section" <?php if (get_field('faq_bg')) : ?> style="background-image: url(<?php the_field('faq_bg'); ?>)" <?php endif; ?>>
    <div class="hero-body">
        <div class="container small ">
            <div class="columns is-tablet">

                <div data-aos="fade-right" class="column has-text-white">
                    <div class="column-is-centered content has-text-centered gallery">
                        <?php if (get_field('gallery_title')) : ?>
                            <h3 data-aos="fade-down" class="title is-2 is-size-3-mobile is-uppercase has-text-primary">
                                <?php the_field('gallery_title'); ?>
                            </h3>
                        <?php endif; ?>

                        <?php echo do_shortcode("[rl_gallery id='229']"); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
