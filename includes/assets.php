<?php

//Load CSS & JS

function CVD_assets(){
    wp_enqueue_style('CVD-css', get_template_directory_uri() . '/css/main.css', microtime());
}

add_action('wp_enqueue_scripts', 'CVD_assets');


?>