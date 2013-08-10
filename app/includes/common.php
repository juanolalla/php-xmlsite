<?php
/**
 * @file
 * Common functions.
 */

/**
 * Includes a template page to show.
 *
 * @param $template
 *   The template file name without the .php extension.
 *
 * @param $variable
 *   An optional array containing variables to use within the template.
 */
function print_template($template, $variable = NULL) {
  // Global declaration is needed to be accessed in the template.
  global $site;

  if (isset($variable)) {
    if (is_array($variable)) {
      foreach ($variable as $key => $value) {
        $$key = $value;
      }
    }
  }
  $file = SERVER_BASE_PATH . 'templates/' . $template . '.php';
  if (file_exists($file)) {
    include($file);
  }
}

/**
 * Return 404 Not found including its custom page.
 */
function page_not_found() {
  if (!headers_sent()) {
    ob_clean();
    header("HTTP/1.0 404 Not Found");
    if (PAGE_NOT_FOUND) {
      require('app/pages/' . PAGE_NOT_FOUND . '.php');
    }
  }
}