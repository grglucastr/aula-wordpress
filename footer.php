
<?php if(!is_front_page()): ?>
     <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <?php
        if(is_active_sidebar('sidebar')){
          dynamic_sidebar('sidebar');
        }
        ?>
      </aside><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </main><!-- /.container -->
<?php endif; ?>


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