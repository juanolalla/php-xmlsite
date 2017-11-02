<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Home</title>

  <?php print_template('head_tags'); ?>

</head>

<body class="body">
<div id="container">

  <?php print_template('header'); ?>

  <?php print_template('nav'); ?>

  <div id="main">

    <h1>Lorem ipsum dolor sit amet</h1>

    <div>
      <div class="banner"><img src="<?php print base_path(); ?>assets/images/banner.jpg" alt="banner" title="banner" width="960" height="400" /></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

  </div>

  <?php print_template('footer'); ?>

</div>

<?php print_template('scripts'); ?>
</body>
</html>
