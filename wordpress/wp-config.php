<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/* Claves únicas de autenticación y sal. */
define('AUTH_KEY',         'pon_tu_clave_aqui');
define('SECURE_AUTH_KEY',  'pon_tu_clave_aqui');
define('LOGGED_IN_KEY',    'pon_tu_clave_aqui');
define('NONCE_KEY',        'pon_tu_clave_aqui');
define('AUTH_SALT',        'pon_tu_clave_aqui');
define('SECURE_AUTH_SALT', 'pon_tu_clave_aqui');
define('LOGGED_IN_SALT',   'pon_tu_clave_aqui');
define('NONCE_SALT',       'pon_tu_clave_aqui');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');


