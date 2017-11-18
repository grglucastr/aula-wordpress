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
    
    <style>
      .showcase{
        background: #333 url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg')?>) no-repeat center center;
      }
    </style>
    
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
    </header>



<section class="showcase">
  <div class="container">
      <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
      <p><?php echo get_theme_mod('showcase_text', 'Here Some Dummy Text'); ?></p>
      <a href="<?php echo get_theme_mod('btn_url', 'http://test.com')?>" class="btn btn-primary btn-lg">
        <?php echo get_theme_mod('btn_text', 'Read More'); ?>
      </a>
    </div>
</section>
<section class="boxes">      
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php 
          if(is_active_sidebar('box1')){
            dynamic_sidebar('box1');
          }
        ?>
      </div>
      
      <div class="col-md-4">
         <?php 
            if(is_active_sidebar('box2')){
              dynamic_sidebar('box2');
            }
          ?>
      </div>
          
      <div class="col-md-4">
         <?php 
            if(is_active_sidebar('box3')){
              dynamic_sidebar('box3');
            }
          ?>
      </div>      
    </div>
  </div>
</section>


 <footer class="blog-footer">
  <p> &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> </p>
  <p> <a href="#">Back to top</a> </p>
</footer>
    
    <?php wp_footer(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    -->
    
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js" ></script>
    <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    
  </body>
</html>