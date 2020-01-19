<?php get_header(); ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class="post">
      <h2 class="title"><a href="#"><?php the_title(); ?></a></h2>
      <p class="meta">Posted by <a href="#">Someone</a> on July 08, 2013
        &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
      <div class="entry"> <a href="#" class="image image-full">
          <?php the_post_thumbnail('full'); ?>
          </a>
        <?php the_content('Read More'); ?>
      </div>
    </div>
  <?php endwhile; ?> 
<?php get_footer(); ?>