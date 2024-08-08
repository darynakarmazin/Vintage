<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<title>Vintage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
</head>

<body>
<!-- HEADER -->
<header>
  <!-- header wrapper -->
  <div class="wrapper cf">
    <div id="logo"> <a href="<?php echo get_template_directory_uri(); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a> </div>
  </div>
  <!-- ENDS header wrapper -->
  <!-- nav -->

  <?php
  
      $menu = wp_nav_menu( array(
        'theme_location' => 'main-menu',
        'container'      => false,
        'menu_class'     => 'sf-menu',
        'menu_id'        => 'nav',
        'echo'           => false,
        'fallback_cb'    => 'wp_page_menu',
        'link_after'     => '<i><b></b></i>',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      ));

      if ($menu) : ?>

        <nav class="cf">
            <div class="wrapper cf">
              <?php echo $menu; ?>
            </div>
        </nav>

      <?php endif;?>
  <!-- ends nav -->
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div role="main" id="main">
  <div class="wrapper">