<?php

wp_enqueue_style('style-name',get_stylesheet_uri());
wp_enqueue_style('script-bootstrap', get_template_directory_uri() .'./bootstrap.min.css');
wp_enqueue_script('script-name' , get_template_directory_uri() . './bootstrap.bundle.min.js', array(), '1.0.0', true );
// wp_enqueue_script( 'script-name', get_template_directory_uri() . './bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('title-tag');
add_theme_support('custom-logo');

// menu 
register_nav_menus([
    'TM'=>'Primary-1',
    'FM'=>'Footer'
]);
// sidebar 
register_sidebar([
    'name' => 'Main Banner',
    'id'=> 'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
]);

register_sidebar([
    'name' => 'Side Image',
    'id'=> 'sideimage',
    'before_widget'=>'<div class="simage">',
    'after_widget'=>'</div>'
]);

register_sidebar([
    'name' => 'Side video',
    'id'=> 'sidevideo',
    'before_widget'=>'<div class="simage">',
    'after_widget'=>'</div>'
]);
register_sidebar([
    'name' => 'List',
    'id'=> 'listt',
    'before_widget'=>'',
    'after_widget'=>''
]);
// marquee 
register_sidebar([
    'name' => 'Marquee',
    'id'=> 'marquee',
    'before_widget'=>'<div class="marquee">',
    'after_widget'=>'</div>'
]);
// slider 
register_sidebar([
    'name' => 'Slider image One',
    'id'=> 'slider',
    'before_widget'=>'<div class="slider">',
    'after_widget'=>'</div>'
]);
register_sidebar([
    'name' => 'Slider image two',
    'id'=> 'slider2',
    'before_widget'=>'<div class="slider">',
    'after_widget'=>'</div>'
]);
register_sidebar([
    'name' => 'Slider image three',
    'id'=> 'slider3',
    'before_widget'=>'<div class="slider">',
    'after_widget'=>'</div>'
]);
?>
