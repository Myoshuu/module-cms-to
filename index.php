<?= get_header() ?>
<div class="banner">
  <div class="image"></div>
  <div class="overlay">Ayo lawan Corona!</div>
</div>

<div class="container">
  <div class="news">
    <h3>News</h3>
    <div class="news-content">
      <?php $query = new WP_Query(['post_type' => 'news']) ?>
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post() ?>
          <div class="the-content">
            <div class="left">
              <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
            </div>
            <div class="right">
              <h3 class="mb-1"><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
              <p><?= the_excerpt() ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="news">
    <h3>Events</h3>
    <div class="news-content">
      <?php $query = new WP_Query(['post_type' => 'events']) ?>
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post() ?>
          <div class="the-content">
            <div class="left">
              <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
            </div>
            <div class="right">
              <h3 class="mb-1"><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
              <p><?= the_excerpt() ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?= get_footer() ?>