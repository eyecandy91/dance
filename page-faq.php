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
 * Template Name: FAQ page
 */

get_header();
?>

<section class="hero is-light section" <?php if (get_field('faq_bg')) : ?> style="background-image: url(<?php the_field('faq_bg'); ?>)" <?php endif; ?>>
    <div class="hero-body">
        <div class="container small ">
            <div class="columns is-tablet">

                <div data-aos="fade-right" class="column has-text-white">
                    <div class="column-is-centered content ">
                        <?php if (get_field('faq_title')) : ?>
                            <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile is-uppercase has-text-primary">
                                <?php the_field('faq_title'); ?>
                            </h1>
                        <?php endif; ?>
                        <!-- <p class="is-marginless"> -->
                        <div class="content">
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'category_name' => 'published',
                                'post_type' => 'faqs'
                            );
                            $faqs = get_posts($args);
                            foreach ($faqs as $post) : setup_postdata($post);
                                $count++; //increment the variable by 1 each time the loop executes
                                if (!empty($faqs)) { ?>
                                    <h5 class="is-4 is-uppercase has-text-primary has-text-weight-bold">
                                        <?php the_title(); ?>
                                    </h5>
                                    <?php the_content(); ?>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
