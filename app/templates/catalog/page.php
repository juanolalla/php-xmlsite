<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php print_data($product->name); ?> desde <?php print_data($product->price); ?>€/mes</title>

  <?php print_template('head_tags'); ?>

</head>

<body class="body product-page">
<div id="container">

  <?php print_template('header'); ?>

  <?php print_template('nav', array('active_menu' => '1')); ?>

  <div id="main">

    <div class="product clearfix">

      <div class="product-image">
        <img src="<?php print_data($product->image); ?>" alt="" title="<?php print_data($product->name); ?>" />

        <p class="product-price"><?php print_data($product->price); ?> €</p>
      </div>

      <div class="product-review">

        <h2 class="product-name"><?php print_data($product->name); ?></h2>

        <div class="product-details"><?php print_data($product->details); ?></div>

      </div>

    </div>

    <?php print_template('footer'); ?>

  </div>

  <?php print_template('scripts'); ?>
</body>
</html>
