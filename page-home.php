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
 * Template Name: Home page
 */

get_header();
?>

<div class="hero-body">
    <div class="fullscreen-bg" 
    <?php if( get_field('header_bg') ): ?>
        style="background-image: url(<?php the_field('header_bg'); ?>)"
    <?php endif; ?>>
    </div>
    <div id="main" class="container">
            <h1 class="title is-1 is-size-2-mobile is-uppercase has-text-white fade-in main-title">
            <?php if( get_field('header_title') ): ?>
                <?php the_field('header_title'); ?>
            <?php endif; ?> 
        </h1>
        <?php if( get_field('header_textarea') ): ?>
            <?php the_field('header_textarea'); ?>
        <?php endif; ?>
            <div class="field is-grouped is-grouped-centered">
                <p class="control">
                    <div class="intro-buttons">
                        <a href="
                            <?php if( get_field('header_btn_link') ): ?>
                                <?php the_field('header_btn_link'); ?>
                            <?php endif; ?> " 
                            class="button is-small">
                            <span class="icon is-small"><i class="fas fa-chevron-right"></i></span>
                            <span>
                                <?php if( get_field('header_btn_txt') ): ?>
                                    <?php the_field('header_btn_txt'); ?>
                                <?php endif; ?> 
                            </span>
                        </a>
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="hero is-white section has-text-centered" 
<?php if( get_field('about_bg') ): ?>
    style="background-image: url(<?php the_field('about_bg'); ?>)"
<?php endif; ?>>
            <div class="hero-body">
                <div class="container content">
                    <div data-aos="fade-down">
                        <h3 class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                            <?php if( get_field('about_title') ): ?>
                                <?php the_field('about_title'); ?>
                            <?php endif; ?>
                        </h3>

                        <div class="columns is-multiline is-tablet has-text-white has-text-centered has-text-left-tablet">
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                                <div class="column-is-padded content">
                                    <p class="is-marginless">
                                    <?php if( get_field('about_box_1') ): ?>
                                        <?php the_field('about_box_1'); ?>
                                    <?php endif; ?> 
                                    </p>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                                <div class="column-is-padded content">
                                    <p class="is-marginless">
                                        <?php if( get_field('about_box_2') ): ?>
                                            <?php the_field('about_box_2'); ?>
                                        <?php endif; ?> 
                                    </p>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="column is-full-mobile is-one-third-desktop">
                                <div class="column-is-padded content">
                                    <p class="is-marginless">
                                        <?php if( get_field('about_box_3') ): ?>
                                            <?php the_field('about_box_3'); ?>
                                        <?php endif; ?> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="hero is-white section" 
        <?php if( get_field('teacher_bg') ): ?>
            style="background-image: url(<?php the_field('teacher_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container content medium is-not-mobile">
                    <div class="column small is-full has-text-centered">

                        <h3 class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                            <?php if( get_field('teacher_title') ): ?>
                                <?php the_field('teacher_title'); ?>
                            <?php endif; ?> 
                        </h3>

                    </div>

                    <div class="columns is-multiline is-tablet has-text-white has-text-centered has-text-left-tablet">
                        <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                            <div class="column-is-padded content">
                                <div class="has-text-centered face">
                                    <?php if( get_field('teacher_1') ): ?>
                                        <img src="<?php the_field('teacher_1'); ?>" alt="something here" width="185" height="185">
                                    <?php endif; ?> 
                                </div>
                                <p class="is-marginless">
                                    <?php if( get_field('teacher_1_bio') ): ?>
                                        <?php the_field('teacher_1_bio'); ?>
                                    <?php endif; ?>                                    
                                </p>
                            </div>
                        </div>
                        <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                            <div class="column-is-padded content">
                                <div class="has-text-centered face">
                                    <?php if( get_field('teacher_2') ): ?>
                                        <img src="<?php the_field('teacher_2'); ?>" alt="something here" width="185" height="185">
                                    <?php endif; ?> 
                                </div>
                                <p class="is-marginless">
                                    <?php if( get_field('teacher_2_bio') ): ?>
                                        <?php the_field('teacher_2_bio'); ?>
                                    <?php endif; ?>                                    
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="field is-grouped is-grouped-centered">
                        <p class="control">
                            <div class="intro-buttons">
                            <a href="
                                <?php if( get_field('teacher_btn_link') ): ?>
                                    <?php the_field('teacher_btn_link'); ?>
                                <?php endif; ?> " 
                                class="button is-small">
                                <span class="icon is-small"><i class="fas fa-chevron-right"></i></span>
                                <span>
                                    <?php if( get_field('teacher_btn_txt') ): ?>
                                        <?php the_field('teacher_btn_txt'); ?>
                                    <?php endif; ?> 
                                </span>
                            </a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-light section"
        <?php if( get_field('aims_&_goals_bg') ): ?>
            style="background-image: url(<?php the_field('aims_&_goals_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container small has-text-centered">
                    <div class="columns is-tablet">

                        <div data-aos="fade-right" class="column has-text-white">
                            <div class="column-is-centered content ">
                                <h3 class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                                <?php if( get_field('aims_&_goals_title') ): ?>
                                        <?php the_field('aims_&_goals_title'); ?>
                                    <?php endif; ?>
                                </h3>
                                <p class="is-marginless">
                                    <?php if( get_field('aims_&_goals_txt') ): ?>
                                        <?php the_field('aims_&_goals_txt'); ?>
                                    <?php endif; ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-white is-medium"
        <?php if( get_field('bottom_bg') ): ?>
            style="background-image: url(<?php the_field('bottom_bg'); ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-multiline is-tablet has-text-white">

                    <?php 

                    $posts = get_field('bottom');

                    if( $posts ): ?>

                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) 
                            setup_postdata($post); 
                            /* grab the url for the full size featured image */
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="column is-full-mobile is-half-tablet is-half-desktop">
                                <div class="column-is-padded has-text-left content bottom-box" style="background-image: url(<?php echo $url ?>)">
                                    <div data-aos="fade-right" class="single-info">
                                        <p class="title is-3 is-size-4-mobile is-uppercase has-text-white"><?php the_title(); ?></p>
                                        <a href="<?php echo get_permalink(); ?>" class="is-marginless button is-small">explore more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
<?php
get_footer();
