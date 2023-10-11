<?php get_header()?>

            
    </div>

    <main role="main" class="container">
      <div class="row">

      <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post( );?>
    <?php the_ID();?><br/>
    


<a href='<?php the_permalink();?>'><?php the_title( );?></a>

    <br/>
    
    <div class="col-md-8 blog-main">
           <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title( );?></h2>
            <?php the_date('','<p class="blog-post-meta">','</p>' );?>
         
            <?php the_post_thumbnail('grande');?><br/>
			<br/>
            
            <p><?php the_excerpt();?></p>
          </div><!-- /.blog-post -->

<?php the_excerpt( );?><br/>
<?php the_content( );?><br/>
<?php endwhile; ?>
    <?php endif; ?>



         

        </div><!-- /.blog-main -->

        <?php get_sidebar();?> 

      </div><!-- /.row -->

    </main><!-- /.container -->
    <?php get_footer();?> 
   