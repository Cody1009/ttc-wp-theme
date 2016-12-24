<!DOCTYPE html >
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?>TTC Albany</title>
     <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
     <?php wp_head(); ?>

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

  </head>
  <body>
      <div id="header" class="container">
        <!-- スパンでat ualbany の色変えたい -->
        <h1><a href="<?php echo home_url("/"); ?>">Table Tennis Club <span>@ Ualbany</span> </a></h1>
        <?php wp_nav_menu(); ?>

      </div>
      <div id = "container" class="row">


      <!--/header 閉じタグ -->
