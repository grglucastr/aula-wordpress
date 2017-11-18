<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <title>
      <?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?> /css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    
    <?php wp_head(); ?>
    
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <?php 
            $pagename = get_query_var('pagename');
            $post = $wp_query->get_queried_object();
            $current_page = "Home";
            if($post){
              $current_page = $post->post_title;
            }
          
            showSitePrimaryMenu($current_page);
          ?>
        </div>
      </div>
      
      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
          <p class="lead blog-description">
            <?php bloginfo('description'); ?>
          </p>
        </div>
      </div>
    </header>