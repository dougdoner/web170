<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
        
        <?php if (have_posts()) :
          while (have_posts()) : ?>
            <div class="post">
            <?php the_post();
              the_title('<h2>', '</h2>' );
                the_content(); ?>
              </div><!-- end .post -->
            <?php endwhile;
        endif;
?>
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>