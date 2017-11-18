<div class="blog-post">
  
   <h2 class="blog-post-title">
    <?php 
      if(is_single()){
        the_title();
      }else{?>
        
        <a href="<?php the_permalink(); ?>">
         <?php the_title();?> 
        </a>
        
    <?php  
      }
    ?>
  </h2>
  
  <p class="blog-post-meta">
    <?php the_date('F j, Y g:i a'); ?> 
    <a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
      <?php the_author();  ?>
    </a>
  </p>

  <?php if(has_post_thumbnail()): ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>
  
  <?php 
    if(is_single()){
      the_content();
      comments_template();
    }else{
      the_excerpt();   
    }
  ?>
  
</div><!-- /.blog-post -->