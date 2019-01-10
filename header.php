<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>eM-COM - Web Solutions</title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- BACKGROUND PHOTO -->
<?php 
    $id = get_the_ID();

    if ($id == 6 || $id == 86) {
?>

    <div class="back_main_page">
        <img class="back_main_page_img" src="<?php echo get_template_directory_uri();?>/img/back.png" />
    </div>
<?php } else { ?>

 <div class="back_main_page">
        <img class="back_main_page_img" src="<?php echo get_template_directory_uri();?>/img/back_other.png" />
    </div>

<?php } ?>
<!-- END BACKGROUND PHOTO -->

<!-- TOP LOGO -->

<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home' alt="eM-COM Web Solutions">
   <img class="main_logo" src="<?php echo get_template_directory_uri();?>/img/grey-logo.png" />
</a>

<!-- END LOGO -->

<!-- LINES -->

    <div class="line1"></div>
    <div class="line2"></div>

<!-- END LINES -->


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new intermedia_walker_nav_menu,
            'fallback_cb' => false,
            'depth' => 2
            )); ?>
        </div>
    </div>
</nav>
