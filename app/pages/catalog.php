<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Our products</title>

  <?php print_template('head_tags'); ?>

</head>

<body class="body catalog">
<div id="container">

  <?php print_template('header'); ?>

  <?php print_template('nav', array('active_menu' => '1')); ?>

  <div id="main">

    <h1>Our products</h1>

    <div>
      <ul class="clearfix">
        <?php foreach(data_find_all('product') as $product): ?>
          <li class="product-thumbnail"><?php print_template('catalog/teaser', array('product' => $product)); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

  </div>

  <?php print_template('footer'); ?>

</div>

<?php print_template('scripts'); ?>
</body>
</html>
