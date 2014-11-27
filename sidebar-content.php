<aside id="categories" class="columns-4">
<?php if (is_active_sidebar('content')) :
  dynamic_sidebar('content');
else : ?>
<h2>Categories</h2>
  <?php wp_list_categories(); ?>
<?php endif; ?>
</aside>