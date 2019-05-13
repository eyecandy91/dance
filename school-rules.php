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
 * Template Name: School rules page
 */

get_header();

get_header();
?>

<?php if( have_rows('all_rules') ): 

while( have_rows('all_rules') ): the_row(); 

// Page var
$title = get_sub_field('title');
$bg = get_sub_field('bg');

// students var
$s_heading = get_sub_field('student_heading'); 
$s_sub_heading = get_sub_field('student_sub_heading'); 
$s_rules = get_sub_field('student_rules');

//parents var
$p_heading = get_sub_field('parent_heading'); 
$p_sub_heading = get_sub_field('parent_sub_heading'); 
$p_rules = get_sub_field('parent_rules');

$extra_rules = get_sub_field('extra')
?>

    <section class="hero is-white section" 
        <?php if(isset($bg)): ?>
            style="background-image: url(<?php echo $bg ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container content medium is-not-mobile">
                    <div class="column small is-full has-text-centered">

                        <?php if(isset($title)): ?>
                            <h3 data-aos="fade-down" class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                                <?php echo $title ?>
                            </h3>
                        <?php endif; ?> 

                        <div class="columns is-multiline is-tablet has-text-white has-text-centered has-text-left-tablet">
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <div class="column-is-padded content">
                                <?php if(isset($s_heading)): ?>
                                    <h4 class="title is-4  is-uppercase has-text-primary has-text-centered">
                                        <?php echo $s_heading ?>
                                    </h4>
                                <?php endif; ?> 

                                <?php if(isset($s_sub_heading)): ?>
                                    <p class="has-text-white has-text-weight-bold">
                                        <?php echo $s_sub_heading ?>
                                    </p>
                                <?php endif; ?> 

                                <?php if(isset($s_rules)): ?>
                                        <ul class="menu-list is-styled">
                                        <?php echo $s_rules ?>
                                        </ul>
                                <?php endif; ?> 
                                </div>
                            </div>

                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <div class="column-is-padded content">
                                <?php if(isset($p_heading)): ?>
                                    <h4 class="title is-4  is-uppercase has-text-primary has-text-centered">
                                        <?php echo $p_heading ?>
                                    </h4>
                                <?php endif; ?> 

                                <?php if(isset($p_sub_heading)): ?>
                                    <p class="has-text-white has-text-weight-bold">
                                        <?php echo $p_sub_heading ?>
                                    </p>
                                <?php endif; ?> 

                                <?php if(isset($p_rules)): ?>
                                    <!-- <p class="title is-4 is-size-4-mobile is-uppercase has-text-primary"> -->
                                        <ul class="menu-list is-styled">
                                        <?php echo $p_rules ?>
                                        </ul>
                                    <!-- </p> -->
                                <?php endif; ?> 

                                <?php if(isset($extra_rules)): ?>
                                    <p class="has-text-white has-text-weight-bold">
                                        <?php echo $extra_rules ?>
                                    </p>
                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

<?php endwhile;
endif; 

get_footer();
