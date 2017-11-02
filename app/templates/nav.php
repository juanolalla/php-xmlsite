<div id="nav" class="clearfix">

  <ul class="menu list-tabs-informe">
    <li class="menu-item menu-item-1<?php print (isset($active_menu) && $active_menu == '1') ? ' active' : ''; ?>">
      <a href="<?php print base_path(); ?>catalog">Catalog</a></li>
    <li class="menu-item menu-item-2<?php print (isset($active_menu) && $active_menu == '2') ? ' active' : ''; ?>">
      <a href="<?php print base_path(); ?>blog">Blog</a></li>
    <li class="menu-item menu-item-3<?php print (isset($active_menu) && $active_menu == '3') ? ' active' : ''; ?>">
      <a href="<?php print base_path(); ?>about">About</a></li>
    <li class="menu-item menu-item-4<?php print (isset($active_menu) && $active_menu == '4') ? ' active' : ''; ?>">
      <a href="<?php print base_path(); ?>contact">Contact</a></li>
  </ul>

</div>
