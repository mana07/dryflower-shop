<?php
    function enqueue_name(){
  wp_enqueue_style('style_name', get_template_directory_uri() . '/CSS/style.css', array(), '1.0.0');
   }
  add_action('wp_enqueue_scripts','enqueue_name');
?>
<?php
add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
?>
