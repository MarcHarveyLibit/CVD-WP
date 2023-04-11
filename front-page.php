<?php

    /* Template Name: Home */

?>

<?php get_header();?>
   <!-- banner -->
   <section class="banner">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-text">
                <h1> <?php echo get_field('banner_title') ?></h1>
                <p><?php echo get_field('lorem') ?></p>
                    <a href="#" class="btn btn__yellow">Explore more</a>
                </div>
                <?php $img = get_field('banner_img'); if(!empty($img)): ?>
            <img src="<?php echo esc_url($img ['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif;?>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="services-wrapper">
                <?php if(have_rows('services_title')) : while(the_repeater_field('services_title')): ?>
                <div class="services-item">
                    <?php 
                    $img = get_sub_field('serv_img'); if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('content'); ?></p>
                    <a href="#" class="btn btn__yellow">Get a Qoute</a>
                </div>
                <?php 
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>

    <!-- about -->
    <section class="hm-about">
        <div class="container">
            <div class="hm-about-wrapper">
                <?php 
                $img = get_field('about_img'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>

                <div class="hm-about-text">
                    <h2><?php echo get_field('about_title')?></h2>
                    <p><?php echo get_field('about_text')?></p>
                    <p><?php echo get_field('about_p')?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- latest trends -->
    <section class="trends">
        <div class="container">
            <div class="trends-title">
                <h2><?php echo get_field('trend_sub')?></h2>
                <p><?php echo get_field('trends_text')?></p>
            </div>
            <div class="trends-wrapper">
                <?php if(have_rows('trends_repeat')): while(the_repeater_field('trends_repeat')): ?>
                <div class="trends-item">
                <?php 
                $img = get_sub_field('trends_img'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
                    <div class="trends-text">
                        <h4><?php echo get_sub_field('trends_text')?></h4>
                        <p><?php echo get_sub_field('trends_p')?></p>
                        <a href="#">Read more...</a>
                    </div>
                </div>
                <?php
                endwhile;
                else :
                    echo "There is no content";
                endif;
                wp_reset_postdata();
                ?>

                
            </div>
        </div>
    </section>

    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <div class="hm-contact__wrapper">
                <h4>Feel free to talk to us about your project</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>

<?php get_footer();?>