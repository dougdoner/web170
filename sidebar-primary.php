<aside id="sub-nav" class="columns-3">
<?php if (is_active_sidebar('Primary')) :
  dynamic_sidebar('Primary');
//if Primary sidebar is not active or is broken, get the five most recent posts and echo them onto the page.
else : ?>
  <h3>Recent posts</h3>
  <ul>
  <?php $recent_post = wp_get_recent_posts( array('numberposts' => 5) );
      foreach ($recent_post as $rec) {
        echo '<li><a href="' . get_permalink($rec["ID"]) . '">' . $rec["post_title"]. '</a> </li> ';
      }
  ?>
  </ul>
 
<?php endif; ?>
</aside>