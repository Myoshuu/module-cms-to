<?php
define('DIR', get_stylesheet_directory_uri());

add_action('init', function () {
  register_post_type('news', [
    'label' => 'News',
    'public' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'taxonomies' => ['category']
  ]);

  register_post_type('events', [
    'label' => 'Events',
    'public' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'taxonomies' => ['category']
  ]);
});
