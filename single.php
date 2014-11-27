<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
        
        <?php if (have_posts()) :
          while (have_posts()) : ?>
            <div class="post">
            <?php the_post();
              the_title('<h2>', '</h2>' );
              ?>
                <div class="post-meta">
                  <p>Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?> | Categories: <?php the_category(", "); ?></p>
                </div><!-- end .post-meta -->
                <?php the_content(); ?>
              <?php edit_post_link('Edit this post'); ?>
              </div><!-- end .post -->
            <?php endwhile;
        endif; ?>
        <?php comments_template(); ?>
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>