<?php

    /* 
    Template Name: Services 
    */

?>

<?php get_header();?>
<!-- services -->
<?php if(have_rows('services_repeat')): while(the_repeater_field('services_repeat')): ?>
    <section class="services-page">
        <div class="container">
            <div class="services-page-wrapper">
                <div class="services-page-content">
                    <h2><?php echo get_sub_field('service_title');?></h2>
                    <p><?php echo get_sub_field('service_text');?></p>
                    <p><?php echo get_sub_field('service_content');?></p>
                    <div class="price">
                        <p><?php echo get_sub_field('service_price');?></p>
                        <h4><?php echo get_sub_field('service_value'); ?></h4>
                        <h5><?php echo get_sub_field('service_vary');?></h5>
                    </div>
                </div>
                    <?php 
                    $img = get_sub_field('service_img'); if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </section>
    <?php
    endwhile;
    else :
        echo "There is no content";
    endif;
    wp_reset_postdata();
    ?>

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