<?php get_header()?>
      
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
        <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post( );?>
  
    


<a href='<?php the_permalink();?>'><?php the_title( );?></a>

    <br/>
    

           <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title( );?></h2>
            <?php the_date('','<p class="blog-post-meta">','</p>' );?>
         
            <?php the_post_thumbnail('grande');?><br/>
			<br/>
            
            <p><?php the_excerpt();?></p>
          </div><!-- /.blog-post -->


<!-- 
          <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          </div><!-- /.blog-post -->
 -->




<?php the_excerpt( );?><br/>
<?php the_content( );?><br/>
<?php endwhile; ?>
    <?php endif; ?>
			
       

         

        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </main><!-- /.container -->

   <?php get_footer()?>
