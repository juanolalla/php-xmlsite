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
    <h1><?php print_data($node->title); ?></h1>

    <div class="submitted"><strong><?php print_data($node->author->name); ?></strong> | <?php print_data($node->date); ?></span>

    <div class="content"><?php include($content_file) ?></div>
  </div>

  <?php print_template('footer'); ?>

</div>

<?php print_template('scripts'); ?>
</body>
</html>
