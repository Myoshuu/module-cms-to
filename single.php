<?php get_header() ?>
<div class="container">
  <?php while (have_posts()) : the_post() ?>
    <div class="the-content">
      <div class="left">
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
      </div>
      <div class="right">
        <h3 class=""><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
        <p><?= the_content() ?></p>
      </div>
    <?php endwhile; ?>
    </div>
    <?php get_footer() ?>