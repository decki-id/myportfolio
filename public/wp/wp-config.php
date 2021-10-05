<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'decki_wp541' );

/** MySQL database username */
define( 'DB_USER', 'decki_wp541' );

/** MySQL database password */
define( 'DB_PASSWORD', '!!02pK44S8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yo02ga1zdxhvqfcveac4s2ajccpy3cabc9totyvkvbkkhzmo4vbzv7usgphp7k03' );
define( 'SECURE_AUTH_KEY',  'nbjdxzy9vunwbuvi462x5f5gduzfgwug75djqkg0bqfegvbbph1v1lbcugef7mf1' );
define( 'LOGGED_IN_KEY',    'qxj6rqbk8p5mhtq5o3glbsorhxqjdz0u1gdq78q0spkyw4vlrbexfwioaxk0orpc' );
define( 'NONCE_KEY',        'tmnphcajprqmkv91u3e9txybiy7og64du0p88fj3ut1yvy24k7haobtrnsvm4x4q' );
define( 'AUTH_SALT',        'bzyka3ljmyn2zgkksntjkcybp4olyxujntmcbw94fvmsjb3a5byx2n1g6xvmmdaf' );
define( 'SECURE_AUTH_SALT', 'ylmcar507zfnolt21uybybhihx1vipo3q6ltqbhuvwqnkayh4d5dskkzmiaik5ki' );
define( 'LOGGED_IN_SALT',   'jxbwbgfbdfncg51xczuxreehwm1p6r2xbplhw4iwsfxerglv740jsnul7yaaifer' );
define( 'NONCE_SALT',       'gewkiqnlypj8dm4eipblfgtpkcasv4khvmklf9mgbyqszfuvddbdbrxqhixej0kh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpur_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
