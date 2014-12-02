<?php
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Header Menu' ),
    )
  );
}
add_action( 'init', 'register_menus' );

function register_the_sidebars() {
  /* Register the 'primary' sidebar. */
  register_sidebar(
    array(
    'id' => 'primary',
    'name' => __( 'Primary' ),
    'description' => __( 'Sidebar for left side of website.' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
    )
  );
  /* Register the 'content' sidebar. */
  register_sidebar(
    array(
    'id' => 'content',
    'name' => __( 'Content' ),
    'description' => __( 'Sidebar for right side of webwsite.' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
    )
  );
}
add_action( 'widgets_init', 'register_the_sidebars' );

?>