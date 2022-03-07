<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Gcini-Blog' );

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
define( 'AUTH_KEY',         'Av2y22eYs4myqeaPVpKrIXPfG53MIKcuuev40gpXhubWkBC1Qlx7mpLV5zX1YXpk' );
define( 'SECURE_AUTH_KEY',  'bKKkKUhaGTQEbcdRyPV6uss1IKYnUklLdbhqbwWjNwzUPdCaJJJSPynkBn4W9Myh' );
define( 'LOGGED_IN_KEY',    'IjMXGuEWNpxApJNEhr1ZXdT4q9lOduaB80ELqU6rjQUJviR6LoCGuYB2EjViU0VX' );
define( 'NONCE_KEY',        'TL4OeXKokHVW0QOA4z1POlRGj39SwqEstNMqkX8eNewhBYtHtJng7pfPZuYY9z3J' );
define( 'AUTH_SALT',        'el42ME4U8hgiK4ZD5JLwpRLA1CPQ7otWTQVFcI7ChpJFMssUSjnehFlozP8ANC7D' );
define( 'SECURE_AUTH_SALT', 'HgpvVWJg8ua2q07aUwJHAR3VoJD8u0XjXRTZEdRuN12lC2XA2iY67mco8TJncxH5' );
define( 'LOGGED_IN_SALT',   'n8kncKipL20LloZjHCJ2vDDN3r3LgJvBwQa7wmqOylCmUZreVpRyjw4yyvEGuf5j' );
define( 'NONCE_SALT',       'MUWYisg5nVQn937z4Bjh5QyOqFgpgz2JZpfTQ3Yj9FxbfudvcRUFu7zatyRauRgA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
