<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
        <?php if (is_category()) : ?>
        <h2>Archive Results for <?php single_cat_title(); ?></h2>
        <?php elseif (is_tag()) : ?>
          <h2>Archive results for: <?php single_tag_title(); ?></h2>
        <?php elseif (is_day()) : ?>
          <h2>Archive results for: <?php the_time('F jS, Y'); ?></h2>
        <?php elseif (is_month()) : ?>
          <h2>Arhive results for: <?php the_time('F, Y'); ?></h2>
        <?php elseif (is_year()) : ?>
          <h2>Archive results for: <?php the_time(' Y '); ?></h2>
        <?php endif; ?>
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
            <p>No results for that archive term</p>
          </div>
        <?php endif; ?>
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>