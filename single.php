<?php get_header(); ?>
   
    <main role="main" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();
                get_template_part('content', get_post_format());
              }
            }else{
              __('No Posts Found');
            }
          ?>
          
          <!--
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
          -->
          
        </div><!-- /.blog-main -->

   <?php get_footer(); ?>
