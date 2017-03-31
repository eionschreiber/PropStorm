<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prop Storm portfolio website">
    <meta name="author" content="Eion Schreiber">
    <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container propstorm-container">
    <div class="row propstorm-row">
  <nav class="navbar navbar-default col-sm-3 propstorm-navbar">
    <div class="container-fluid propstorm-nav-container">

        <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
          }
        wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'menu_class' => 'nav nav-pills nav-stacked propstorm-nav') );
        ?>
    </div>
    <?php
     $files = glob("wp-content/uploads/2017/03/*-icon*");
     for ($i=1; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );
         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
             echo '<img src="'.$image .'" alt="Social Media Icon", class="social-icon" />';
            } else {
                continue;
            }
          }
       ?>
       <br>
       <p id="site-creator">Site created by:<br><a href="http://www.eionschreiber.com/" target="_blank">Eion Schreiber</a></p>

  </nav>

<div class="col-sm-9 propstorm-content-area";>
