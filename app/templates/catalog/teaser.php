<div class="teaser">

  <a href="catalog/<?php print_data($product->id); ?>">
    <img src="<?php print_data($product->image); ?>" alt="" title="<?php print_data($product->name); ?>" width="150" />
  </a>

  <p class="product-price"><?php print_data($product->price); ?> €</p>

</div>