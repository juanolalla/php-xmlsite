<?php
/**
 * @file
 * Implements initialization and custom routing.
 *
 * It can be used to load actions from api.php, like printing an entity page.
 */
require_once('app/includes/custom/api.php');

// Example: load product page from catalog/product-id url format.
if (strpos(REQUEST_PAGE, 'catalog/') === 0 && strlen(REQUEST_PAGE) > strlen('catalog/')) {
  print_product_page(substr(REQUEST_PAGE, strlen('catalog/')));
  exit;
}