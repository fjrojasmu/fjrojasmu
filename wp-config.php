<?php
/**
 * Archivo de configuración de WordPress
 *
 * Contiene las configuraciones básicas de acceso a la base de datos, las definiciones de las
 * tablas, las llaves secretas y cualquier otra configuración necesaria.
 *
 * Puedes obtener la configuración específica de tu alojamiento mientras instalas WordPress.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Configuración de MySQL - Puedes obtener esta información de tu proveedor de alojamiento ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'word');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Duoc.2023');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'clusterbbdd-instance-1.cdejcgq6tctt.us-east-1.rds.amazonaws.com');

/** Codificación de caracteres para la base de datos */
define('DB_CHARSET', 'utf8');

/** Tipo de ordenación de la base de datos. No lo modifiques si no sabes lo que haces. */
define('DB_COLLATE', '');

// ** Claves únicas de autenticación y sal. ** //
/** https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'Duoc.2023');
define('SECURE_AUTH_KEY',  'Duoc.2023');
define('LOGGED_IN_KEY',    'Duoc.2023');
define('NONCE_KEY',        'Duoc.2023');
define('AUTH_SALT',        'Duoc.2023');
define('SECURE_AUTH_SALT', 'Duoc.2023');
define('LOGGED_IN_SALT',   'Duoc.2023');
define('NONCE_SALT',       'Duoc.2023');

/** Prefijo de la tabla de la base de datos de WordPress */
$table_prefix  = 'wp_';

/** Para desarrolladores: Modo de depuración de WordPress. */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! ¡Feliz blogging! */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
