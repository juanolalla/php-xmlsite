<?php
/**
 * @file
 * Main file for custom functions.
 *
 * Logic can be divided and loaded from different files as needed.
 */

/**
 * Print 'catalog/teaser' template by id, loading the data first.
 *
 * Function for catalog example.
 */
function print_product_teaser($product_id) {
  $product = data_find('product',$product_id);
  print_template('catalog/teaser', array('product' => $product));
}

/**
 * Print 'catalog/page' template by id, loading the data first
 *
 * Function for catalog/product-id example.
 */
function print_product_page($product_id) {
  global $site;
  $product = data_find('product', $product_id);
  if ($product) {
    require_once(APP_PATH . 'templates/catalog/page.php');
  }
  else {
    page_not_found();
  }
}

/**
 * Print the specified article teaser from the teasers template.
 */
function print_article_teaser($id) {
  print_template('article/teaser', array('article' => data_find('article', $id)));
}
