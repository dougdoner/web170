<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
        
        <?php if (have_posts()) :
          while (have_posts()) : ?>
            <div class="post">
            <?php the_post();
              the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
              ?>
                <div class="post-meta">
                  <p>Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?> | Categories: <?php the_category(", "); ?></p>
                </div><!-- end .post-meta -->
              <?php the_content(); ?>
              </div><!-- end .post -->
            <?php endwhile; ?>
        <div class="pagination">
            <p class="next-posts"><?php next_posts_link( 'Older posts &#8594;', 0 ); ?></p>
            <p class="previous-posts"><?php previous_posts_link( '&#8592; Newer posts', 0 ); ?></p>
		</div>
        <?php endif; ?>
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>