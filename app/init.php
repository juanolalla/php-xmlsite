<?php
/**
 * @file
 * Implements initialization and custom routing.
 *
 * It can be used to load actions from api.php, like printing an entity page.
 */
require_once(APP_PATH . 'api.php');

// Load global data
$global_data = data_load('global');
define('GLOBAL_PHONE', $global_data->phone);

// Example: load product page from catalog/product-id url format.
if (strpos(REQUEST_PAGE, 'catalog/') === 0 && strlen(REQUEST_PAGE) > strlen('catalog/')) {
  print_product_page(substr(REQUEST_PAGE, strlen('catalog/')));
  exit;
}

// If the REQUEST_PAGE corresponds to an article load the article template.
$entity_type = 'article';
if ($node = data_find($entity_type, REQUEST_PAGE)) {
  $content_file =   DATA_CONTENT_PATH . "$entity_type/" . $node->id . ".html";
  if (file_exists($content_file)) {
    require(TEMPLATES_PATH . "$entity_type/page.php");
    exit;
  }
}
