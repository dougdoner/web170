<?php get_header(); ?>
  <?php get_sidebar('primary'); ?>
    <div id="main" class="columns-9">
        <div id="content" class="columns-8">
            <div class="post">
              <h2 class="fourohfour">404, page not found</h2>
              <p><a href="<?php echo home_url('/'); ?>">Return to home</a></p>
            </div><!-- end .post -->
        </div>
        <?php get_sidebar('content'); ?>
      </div>
    </div>
  </div><!-- end middle -->
<?php get_footer(); ?>