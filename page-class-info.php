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
 * Template Name: Class information page
 */

get_header();
?>

<section class="hero is-dark section" <?php if( get_field('class_bg') ): ?>
    style="background-image: url(<?php the_field('class_bg'); ?>)" <?php endif; ?>>
    <div class="hero-body">
        <div class="container small content is-not-mobile">
            <div class="class-info">

                <?php if( get_field('class_title') ): ?>
                <h3 class="title is-2 is-size-3-mobile is-uppercase has-text-white has-text-centered">
                    <?php the_field('class_title'); ?>
                </h3>
                <?php endif; ?>

                <?php if( have_rows('extra_classes') ): 

                            while( have_rows('extra_classes') ): the_row(); 
                                
                                // vars
                                $class_info     = get_sub_field('class_info');
                                $comp_title     = get_sub_field('class_comp');
                                $comp_info      = get_sub_field('class_comp_info');
                                $adult_title    = get_sub_field('class_adult_title');
                                $adult_info     = get_sub_field('class_adult_info');
                                $extra          = get_sub_field('class_extra');
                                
                                ?>

                <?php if(isset($class_info)): ?>
                <?php echo $class_info ?>
                <?php endif; ?>

                <?php if(isset($comp_title)): ?>
                <h4 class="title is-4  is-uppercase has-text-primary is-marginless">
                    <?php echo $comp_title ?>
                </h4>
                <?php endif; ?>

                <?php if(isset($comp_info)): ?>
                <?php echo $comp_info ?>
                <?php endif; ?>

                <?php if(isset($adult_title)): ?>
                <h4 class="title is-4  is-uppercase has-text-primary is-marginless">
                    <?php echo $adult_title ?>
                </h4>
                <?php endif; ?>

                <?php if(isset($adult_info)): ?>
                <?php echo $adult_info ?>
                <?php endif; ?>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>

        <div class="container content is-not-mobile">
            <div class="column is-full">
                <div class="columns is-multiline is-tablet has-text-white has-text-left-tablet">

                    <?php
                                    $args = array( 'posts_per_page' => -1,
                                    'category_name' => 'published',
                                    'post_type'     => 'classes');
                                    $faqs = get_posts( $args );
                                    foreach ( $faqs as $post ) : setup_postdata( $post );
                                    $count++; //increment the variable by 1 each time the loop executes
                                    if (!empty($faqs)) { ?>
                    <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                        <div class="column-is-padded content single-class">
                            <?php if( get_field('class_date') ): ?>
                            <h5 class="title is-4 is-size-4-mobile is-uppercase has-text-primary">
                                <?php the_field('class_date'); ?>
                            </h5>
                            <?php endif; ?>
                            <div class="dates">
                                <?php
                                                $types = get_field('class_type');
                                                $times = get_field('class_time');
                                                // foreach ($values as $value) {
                                                foreach (array_combine($types, $times) as $type => $time) {
                                                ?>
                                <p class="title is-7 text-primary is-uppercase is-marginless has-text-primary">
                                    <?php echo $type ?> <?php echo $time ?></p>
                                <?php 
                                                } ?>
                            </div>
                            <?php if( get_field('additional') ): ?>
                            <p class="has-text-weight-bold additional">
                                <?php the_field('additional'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if( get_field('class_address') ): ?>
                            <p class="is-marginless">
                                <?php the_field('class_address'); ?>
                            </p>
                            <?php endif; ?>
                            <?php 
                                            $class_address = get_field('google_map_link');
                                            if( $class_address ): ?>
                            <a target="_blank" href="<?php echo $class_address; ?>" class="button is-small"><span
                                    class="icon is-small"><i class="fas fa-chevron-right"></i></span><span>View large
                                    map</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php  endforeach;
                                    wp_reset_postdata(); ?>

                    <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                        <div class="column-is-padded content single-class">
                            <?php if( get_field('class_extra') ): ?>
                            <?php the_field('class_extra'); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
</section>

<?php
get_footer();