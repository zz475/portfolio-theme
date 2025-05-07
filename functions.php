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
add_action('acf/init', 'portfolio_register_post_types');

function portfolio_register_post_types() {
    register_post_type('project', [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No projects found',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true,
    ]);
}
?>
