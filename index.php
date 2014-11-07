<?php get_header(); ?>
    <aside id="sub-nav">
      <?php dynamic_sidebar('Primary'); ?>
    </aside>
    <div id="main">
        <div id="content">
        
        <?php if (have_posts()) :
          while (have_posts()) : ?>
            <div class="post">
            <?php the_post();
              if (is_single()):
              the_title('<h2>', '</h2>' );
              else:
              the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
              endif;
              ?>
                <div class="post-meta">
                  <p>Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?> | Categories: <?php the_category(", "); ?></p>
                </div><!-- end .post-meta -->
              <?php if (is_single()) :
                the_content();
              else :
                the_excerpt();
              endif; ?>
              </div><!-- end .post -->
            <?php endwhile;
        endif;
?>
        </div>
        <aside id="categories">
          <?php dynamic_sidebar('content'); ?>
        </aside>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>