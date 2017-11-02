<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Blog</title>

  <?php print_template('head_tags'); ?>

</head>

<body class="body">
<div id="container">

  <?php print_template('header'); ?>

  <?php print_template('nav', array('active_menu' => '2')); ?>

  <div id="main">

    <h1>Latest articles</h1>

    <ul>
      <li><?php print_article_teaser('how-to-foo'); ?></li>
      <li><?php print_article_teaser('how-to-bar'); ?></li>
      <li><?php print_article_teaser('how-to-baz'); ?></li>
    </ul>

  </div>

  <?php print_template('footer'); ?>

</div>

<?php print_template('scripts'); ?>
</body>
</html>
