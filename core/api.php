<?php
/**
 * @file
 * Common functions.
 */

/**
 * Obtain the base path, for example: "/" or "/subdir/".
 */
function base_path() {
  return BASE_PATH;
}

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
  if (isset($variable)) {
    if (is_array($variable)) {
      foreach ($variable as $key => $value) {
        $$key = $value;
      }
    }
  }
  $file = SERVER_TEMPLATES_PATH . $template . '.php';
  if (file_exists($file)) {
    include($file);
  }
}

/**
 * Obtains and prepares request page.
 */
function get_request_page() {
  $request_uri = $_SERVER['REQUEST_URI'];
  $request_page = substr_replace($request_uri, "", 0, strlen(BASE_PATH));

  // If the request_page has a slash at the end ignore it.
  if (substr($request_page, -1) == "/") {
    $request_page = substr_replace($request_page, "", -1);
  }
  if ($request_page == "") {
    $request_page = HOME_PAGE;
  }

  return $request_page;
}

/**
 * Loads the appropriate page for the request or 404 page if there is no match.
 */
function load_request_page() {
  $request_php_file = SERVER_PAGES_PATH . REQUEST_PAGE . '.php';
  if (file_exists($request_php_file)) {
    require(PAGES_PATH . REQUEST_PAGE . '.php');
  }
  else {
    // There is no page to handle the request, so return page not found.
    page_not_found();
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
      require(PAGES_PATH . PAGE_NOT_FOUND . '.php');
    }
  }
}
