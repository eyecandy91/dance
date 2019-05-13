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
 * Template Name: Teacher page
 */

get_header();
?>

<?php if( have_rows('teacher_1_bio') ): 

while( have_rows('teacher_1_bio') ): the_row(); 

$bg = get_sub_field('bg'); 
$img = get_sub_field('img'); 
$name = get_sub_field('name');
$txt1 = get_sub_field('text_1'); 
$txt2 = get_sub_field('text_2'); 
?>

    <section class="hero is-white section" 
        <?php if(isset($bg)): ?>
            style="background-image: url(<?php echo $bg ?>)"
        <?php endif; ?>>
            <div class="hero-body">
                <div class="container content medium is-not-mobile">
                    <div class="column small is-full has-text-centered">

                        <?php if(isset($img)): ?>
                            <div data-aos="fade-down" class="has-text-centered face">
                                <img src="<?php echo $img ?>" alt="something here" width="185" height="185">
                            </div>
                        <?php endif; ?> 

                        <?php if(isset($name)): ?>
                            <h3 data-aos="fade-top" class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                                <?php echo $name ?>
                            </h3>
                        <?php endif; ?> 

                        <div class="columns is-multiline is-tablet has-text-white has-text-left">
                            <?php if(isset($txt1)): ?>
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <div class="column-is-padded content">
                                    <?php echo $txt1 ?>
                                </div>
                            </div>
                            <?php endif; ?>                                  
                            <?php if(isset($txt2)): ?>
                            <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                <div class="column-is-padded content">
                                    <?php echo $txt2 ?>
                                </div>
                            </div>
                            <?php endif; ?>                                  
                        </div>

                    </div>
                </div>
            </div>
        </section>

<?php endwhile;
endif; 

 if( have_rows('teacher_2_bio') ): 

    while( have_rows('teacher_2_bio') ): the_row(); 
    
    $bg = get_sub_field('bg'); 
    $img = get_sub_field('img'); 
    $name = get_sub_field('name');
    $txt1 = get_sub_field('text_1'); 
    $txt2 = get_sub_field('text_2'); 
    ?>
    
        <section class="hero is-white section" 
            <?php if(isset($bg)): ?>
                style="background-image: url(<?php echo $bg ?>)"
            <?php endif; ?>>
                <div class="hero-body">
                    <div class="container content medium is-not-mobile">
                        <div class="column small is-full has-text-centered">
    
                            <?php if(isset($img)): ?>
                                <div class="has-text-centered face">
                                    <img src="<?php echo $img ?>" alt="something here" width="185" height="185">
                                </div>
                            <?php endif; ?> 
    
                            <?php if(isset($name)): ?>
                                <h3 class="title is-2 is-size-3-mobile is-uppercase has-text-white">
                                    <?php echo $name ?>
                                </h3>
                            <?php endif; ?> 
    
                            <div class="columns is-multiline is-tablet has-text-white has-text-left">
                                <?php if(isset($txt1)): ?>
                                <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                    <div class="column-is-padded content">
                                        <?php echo $txt1 ?>
                                    </div>
                                </div>
                                <?php endif; ?>                                  
                                <?php if(isset($txt2)): ?>
                                <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-half-desktop">
                                    <div class="column-is-padded content">
                                        <?php echo $txt2 ?>
                                    </div>
                                </div>
                                <?php endif; ?>                                  
                            </div>
    
                        </div>
                    </div>
                </div>
            </section>
    
    <?php endwhile;
    endif; 

get_footer();
