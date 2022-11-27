# wordpress theme development
##### wordpress style sheet
##### wp scripts
 ## get_stylesheet_uri()  {css}  -->>   <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
 ## get_template_directory_uri()   {Bootstrap} -->>  <link rel="stylesheet" href="<?=get_template_directory_uri()?>./bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>./bootstrap.min.css"> 
    <script src="./bootstrap.bundle.min.js"></script>
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    call this on index.php -> the_custom_logo()




functions.php start--->>> 
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'script-bootstrap', get_template_directory_uri() . '/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . './bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

functions.php end --->>> 
