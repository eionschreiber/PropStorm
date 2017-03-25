<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prop Storm portfolio website">
    <meta name="author" content="Eion Schreiber">

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
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Prop Storm</a>
      </div>
        <ul class="nav nav-pills nav-stacked propstorm-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </ul>

    </div>
  </nav>

<div class="col-sm-9 content-area" style="background-color:#999";>

    <div class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>


    <div class="row">
