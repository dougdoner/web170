<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
        <?php
          if(isset($_GET['author_name'])) :
              $authorName = get_userdatabylogin($author_name);
          else :
              $authorName = get_userdata(intval($author));
          endif;
        ?>
        <h2>Posts by: <?php echo $authorName->display_name; ?></h2>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>
              <div class="post">
              <?php the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
              ?>
                <div class="post-meta">
                  <p>Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?> | Categories: <?php the_category(", "); ?></p>
                </div><!-- end .post-meta -->
              <?php the_excerpt(); ?>
              </div><!-- end .post -->
            <?php endwhile; ?>
        <?php else : ?>
          <div class="post">
            <p>No posts by this author</p>
          </div>
        <?php endif; ?>
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>