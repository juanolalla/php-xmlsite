<?php
/**
 * @file
 * This file declares path constants and loads the appropriate page.
 *
 * Constants:
 *   REAL_BASE_PATH (/app)
 *   SERVER_BASE_PATH (ex: /var/www/.../)
 *   SITE (ex: subsite)
 *   BASE_PATH (ex: /subsite/)
 *   REQUEST_PAGE (ex: catalog)
 *
 */
define('REAL_BASE_PATH', '/app/');
define('SERVER_BASE_PATH', $_SERVER["DOCUMENT_ROOT"] . REAL_BASE_PATH);
$request_uri = $_SERVER['REQUEST_URI'];

// Load bootstrap functions to access data.
require_once('app/includes/bootstrap.php');

// Find requested SITE by uri.
global $site;
$request_uri_arr = explode("/", $request_uri);
$site = data_find('site', $request_uri_arr[1]);
if (!$site) {
  $site = data_find('site', '');
}
define('SITE', get_data($site->id));

// Load custom defined settings.
require('app/includes/custom/settings.php');

// Obtain BASE_PATH.
$base_path = "/";
if (SITE != "") {
  $base_path .= SITE . "/";
}
define('BASE_PATH', $base_path);

// Obtain request page.
$request_page = substr_replace($request_uri, "", 0, strlen(BASE_PATH));
// If the request_page has a slash at the end ignore it.
if (substr($request_page, -1) == "/") {
  $request_page = substr_replace($request_page, "", -1);
}
if ($request_page == "") {
  $request_page = HOME_PAGE;
}
define('REQUEST_PAGE', $request_page);

// Include app functions.
require_once('app/includes/common.php');

// Include custom initialization and routing.
require('app/includes/custom/init.php');

// Determine default routing.
$request_php_file = SERVER_BASE_PATH . 'pages/'. $request_page . ".php";
if (file_exists($request_php_file)) {
  require("app/pages/" . $request_page . ".php");
}
else {
  // There is no page to handle the request, so return page not found.
  page_not_found();
}