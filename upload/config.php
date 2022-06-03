<?php
// HTTP
define('HTTP_SERVER', 'http://shopnc.demo/');

// HTTPS
define('HTTPS_SERVER', 'http://shopnc.demo/');

define('MLM_COMPANY', 'NatureCare');

//MLM SERVER HTTP
// define('HTTP_MLMSERVER', 'http://nature-care.cloudmlmdemo.com/api/');

define('HTTP_MLMSERVER', 'http://naturecare.demo/api/');

// define('HTTP_MLMSERVER', 'http://nature-care.cloudmlmdemo.com/api/');

//MLM SERVER WITHOUT API HTTP
define('HTTP_MLMSERVER_NOAPI', 'http://naturecare.demo/');

// DIR
define('DIR_APPLICATION', '/var/www/html/shopnc/upload/catalog/');
define('DIR_SYSTEM', '/var/www/html/shopnc/upload/system/');
define('DIR_IMAGE', '/var/www/html/shopnc/upload/image/');
define('DIR_STORAGE', '/var/www/html/shopnc/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'cloud');
define('DB_PASSWORD', 'cloud');
define('DB_DATABASE', 'shopnc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');