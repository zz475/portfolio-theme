<?php
function portfolio_enqueue_styles() {
    wp_enqueue_style(
      'portfolio-style',
      get_template_directory_uri() . '/style.css',
      array(),
      filemtime(get_template_directory() . '/style.css')
    );
  }


  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
