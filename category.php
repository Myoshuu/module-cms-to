<?php get_header() ?>

<div class="title">
  <h2><?= get_queried_object()->name ?></h2>
</div>
<div>
  <?php $query = new WP_Query(['post_type' => ['news', 'events'], 'category_name' => get_queried_object()->slug]) ?>
  <?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post()  ?>
      <div class="the-content">
        <div class="left">
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
        </div>
        <div class="right">
          <h3 class=""><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
          <p><?= the_excerpt() ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
      <?php get_footer() ?>