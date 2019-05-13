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
 * Template Name: Contact page
 */

get_header();
?>

    <section class="hero section" 
        <?php if( get_field('contact_bg') ): ?>
            style="background-image: url(<?php the_field('contact_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container small content is-not-mobile">
                    <div class="column is-full">

                        <?php if( get_field('contact_title') ): ?>
                            <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile is-uppercase has-text-white has-text-centered">
                                <?php the_field('contact_title'); ?>
                            </h1>
                        <?php endif; ?>

                        <div class="columns is-multiline is-tablet has-text-white has-text-centered has-text-left-tablet">
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <?php the_field('contact_text'); ?>
                            </div>

                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <?php echo do_shortcode( get_post_meta( get_the_id(), 'form_id', true ) ); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
