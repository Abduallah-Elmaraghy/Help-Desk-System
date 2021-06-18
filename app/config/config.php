<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'help_desk_system');

// App Root
//echo dirname(dirname(__FILE__));
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/help-desk-system/');
// Site Name
define('SITENAME', 'Help Desk System');

define('APP_VERSION', '1.0');

//public pages path
define('VIEWS_PATH', '../app/views/pages/frontend/');
define('VIEWS_PATH_ADMIN', '../app/views/pages/frontend/admin/');
define('VIEWS_PATH_USER', '../app/views/pages/frontend/user/');
define('VIEWS_PATH_HEAD', '../app/views/pages/frontend/Head/');
    