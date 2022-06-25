<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title') ?></title>
</head>

<body>
<nav>
    <div class="title"><?php bloginfo('title'); ?></div>
    <?php wp_nav_menu() ?>
</nav>