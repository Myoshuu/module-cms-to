<?php
define('DIR', get_stylesheet_directory_uri());


add_action('login_head', function () { ?>
  <style>
    #login h1 a {
      background-image: url('<?= DIR ?>/assets/Group 1.png');
    }
  </style>
<?php });

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

add_action('wp_dashboard_setup', function () {
  remove_meta_box('dashboard_site_health', 'dashboard', 'side');
  remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side');
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
});
