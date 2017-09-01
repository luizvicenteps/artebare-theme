<!DOCTYPE html>
<html lang="en">
<head>
<title>magExpress</title>
	<?php wp_head(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
	
</head>
<body <?php body_class(); ?>>
	<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <?php wp_nav_menu( array( 'theme_location' => 'menu_superior') ); ?>
            </ul>
          </div>
          <div class="header_top_right">
  
          <?php get_search_form(); ?>
          <!--           <form action="#" class="search_form">
            <input type="text" placeholder="Text to Search">
            <input type="submit" value="">
          </form> -->

          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">mag<strong>Express</strong> <span>A Pro Magazine Template</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
<!--         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav"> -->

            <?php 
            $args = array(
              'menu_id' => 'navbar',
              'menu_class' => 'nav navbar-nav custom_nav',
              'container' => 'navbar-collapse collapse',
              'theme_location' => 'menu_principal',
              //'after' => 'Texto q vem depois'
              'container_class' => 'Clase que vem depois'


               );
            wp_nav_menu( $args ); ?>
            <!-- <li class=""><a href="index.html">Home</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pages/archive-main.html">Archive</a></li>
                <li><a href="pages/archive1.html">Archive 1</a></li>
                <li><a href="pages/archive2.html">Archive 2</a></li>
                <li><a href="pages/archive3.html">Archive 3</a></li>
              </ul>
            </li>
            <li><a href="pages/single.html">Single page</a></li>
            <li><a href="pages/contact.html">Contact</a></li>
            <li><a href="pages/404.html">404 page</a></li> -->
<!--           </ul>
        </div> -->
      </div>
    </nav>
  </div>
  
<section id="mainContent">
