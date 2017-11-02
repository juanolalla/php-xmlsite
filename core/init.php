<?php

/**
 * @file
 * This file declares path constants and requires other files.
 */
// Obtain BASE_PATH.
$request_uri = dirname($_SERVER['SCRIPT_NAME']);
if ($request_uri !== '/') {
  $request_uri .= '/';
}
define('BASE_PATH', $request_uri);

// Define server based paths.
define('APP_PATH', 'app/');
define('SERVER_BASE_PATH', $_SERVER["DOCUMENT_ROOT"] . BASE_PATH . APP_PATH);
define('PAGES_SUBPATH', 'pages/');
define('TEMPLATES_SUBPATH', 'templates/');
define('SERVER_PAGES_PATH', SERVER_BASE_PATH . PAGES_SUBPATH);
define('SERVER_TEMPLATES_PATH', SERVER_BASE_PATH . TEMPLATES_SUBPATH);
define('PAGES_PATH', APP_PATH . PAGES_SUBPATH);
define('TEMPLATES_PATH', APP_PATH . TEMPLATES_SUBPATH);

// Define data access related paths.
define('DATA_PATH', APP_PATH . 'data/');
define('DATA_CONTENT_SUBPATH', 'content/');
define('DATA_CONFIG_SUBPATH', 'config/');
define('DATA_CONTENT_PATH', DATA_PATH . DATA_CONTENT_SUBPATH);
define('DATA_CONFIG_PATH', DATA_PATH . DATA_CONFIG_SUBPATH);

// Load all the functions to access data.
require_once('core/data_manager.php');

// Load custom defined settings.
$site_settings = config_load('site_settings');
define('HOME_PAGE', $site_settings->home_page);
define('PAGE_NOT_FOUND', $site_settings->page_not_found);

// Include core functions.
require_once('core/api.php');

define('REQUEST_PAGE', get_request_page());

// Include custom initialization and routing.
require_once(APP_PATH . 'init.php');

// Load request page using default routing.
load_request_page();
