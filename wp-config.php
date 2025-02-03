<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'radit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'StYNthafuNneLRl2zwg1L8gqP9SD4wPV08tqVqDRNN2GqQ6oDBlHlGb3qFWxl0Lh' );
define( 'SECURE_AUTH_KEY',  '4WpkW3gDWslshMr7PmDii8uWUtKPsF0uB13bZWIAPRMCr56IqlIdiZoRvg0qEN40' );
define( 'LOGGED_IN_KEY',    'r7oRGUj2kIVITeeBp1twtjbFu3812gqIveZvwVMqIyRZIH9dMG9FgBmtAd3gPejd' );
define( 'NONCE_KEY',        'GGAicg87aG75jAjY0EfIB7KvzhzPPkIwyzqMJg4wFU1MeZQWsW4WQ2UEiQErxb2f' );
define( 'AUTH_SALT',        'AdSsPTCkQr71xyNoMQlwvcxHuLokF0nLuCFoUoy1KcKQPO13OemoLEXC1o7uCscA' );
define( 'SECURE_AUTH_SALT', 'EsOeetjluuEYhBUU56UZPC6zAi6ghsKPIDs7HhdYVHL4RVzySWEppIuGOWtN7tF0' );
define( 'LOGGED_IN_SALT',   '6jDAGV46UpBicifO3gdpXqdTIz7JQFbex6eycBHZmN3WTEL2coYKwVn27bLqJzSA' );
define( 'NONCE_SALT',       'V7yNV0VlYdgKnCocpjbgRIpuPuu9RjDjjmscrdwrQbyHUxtUL36MAuxCmCtxAlIy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
