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
 * Template Name: Corporate bookings page
 */

get_header();
?>

<section class="hero section"
        <?php if( get_field('corporate_bg') ): ?>
            style="background-image: url(<?php the_field('corporate_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-tablet">

                        <div data-aos="fade-right" class="column has-text-white">
                            <div class="column-is-centered content ">
                                <?php if( get_field('corporate_title') ): ?>
                                    <h3 class="title is-2 is-size-3-mobile has-text-white is-uppercase has-text-centered">
                                        <?php the_field('corporate_title'); ?>
                                    </h3>
                                <?php endif; ?>

                                <?php
                                if( '' !== get_post()->post_content ) {?>
                                    <div class="content booking-info">
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
  
                <div class="container content is-not-mobile">
                    <div class="column is-full">
                        <div class="columns is-multiline is-tablet has-text-white has-text-left-tablet">

                            <div class="column is-full has-text-centered is-paddingless">
                                <h4 class="title is-4 is-uppercase has-text-primary is-marginless">
                                Testimonials
                                </h4>
                            </div>

                            <?php
                                        $args = array( 'posts_per_page' => -1,
                                        'category_name' => 'published',
                                        'post_type' => 'testimonials');
                                        $faqs = get_posts( $args );
                                        foreach ( $faqs as $post ) : setup_postdata( $post );
                                        $count++; //increment the variable by 1 each time the loop executes
                                        if (!empty($faqs)) { ?>
                                        <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                                        <div class="column-is-padded content">
                                        <div class="single-testimonial">

                                            <?php if( get_field('testimonial') ): ?>
                                                <div class="is-italic">
                                                    <?php the_field('testimonial'); ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_field('author') ): ?>
                                                <h5 class="is-4 is-uppercase has-text-primary has-text-weight-bold">
                                                    <?php the_field('author'); ?>
                                            </h5>
                                            <?php endif; ?>

                                        </div>
                                        </div>
                                        </div>

                                        <?php } ?>
                            <?php  endforeach;?>

                        </div>            
                    </div>            
                </div>            
            </div>
        </section>

<?php
get_footer();
