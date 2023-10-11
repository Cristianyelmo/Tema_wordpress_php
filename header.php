<!doctype html>
<html lang="en" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico">
    <title>Blog Template for Bootstrap</title>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<!-- Bootstrap core CSS -->
   <!--  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet"> -->
     <?php wp_head(); ?>
  </head>

  <body  <?php body_class(); ?> >

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php echo esc_url(home_url('/') )?>"><?php echo esc_html(get_bloginfo('name') )?></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
       <!--  <nav class="nav d-flex">
          <a class="p-2 text-muted" href="index.html">Index</a>
		  <a class="p-2 text-muted" href="page.html">Page</a>
		  <a class="p-2 text-muted" href="single.html">Single</a>
		  <a class="p-2 text-muted" href="archive.html">Archive</a>
		  <a class="p-2 text-muted" href="gallery.html">Gallery</a>
        </nav> -->

        <?php wp_nav_menu( array('theme_location'=>'main-menu',
        'items_wrap' =>'<nav class="nav d-flex id=%1$s"> %3$s </nav>',
        'container'=>''
        ) );?>
      </div>