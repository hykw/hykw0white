<?php get_header(); ?>
      <div id="container" class="clearfix"> 
        <div id="content" role="main">
          <!-- s:loop-index -->
<?php
  if (is_single())
     get_template_part( 'loop', 'single' );
  elseif (is_page())
     get_template_part( 'loop', 'page' );
  else
     get_template_part( 'loop', 'index' );
?>
          <!-- e:loop-index -->
        </div><!-- #content -->

        <!-- s:sidebar -->
<?php get_sidebar(); ?> 
        <!-- e:sidebar -->
      </div><!-- #container -->
<?php get_footer();
