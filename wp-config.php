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
define( 'DB_NAME', 'marjonca_wp795' );

/** Database username */
define( 'DB_USER', 'marjonca_wp795' );

/** Database password */
define( 'DB_PASSWORD', 'Vp!)88m9BS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'hls5nzp51l8dm1zcoqfzt3g5cb0ucoyw16neziw5vtgqxnytsxczgkqmajspiqf3' );
define( 'SECURE_AUTH_KEY',  'pirteoxqkcmckizmjmdzcinu7be09813ior6ysxnzvke0764wrndwmyw6ipesp63' );
define( 'LOGGED_IN_KEY',    'fyuboqxzj9q3flzj2sa5obb9rsfnubpeistfebwz0dredk6njm9vsvnselrx7xpy' );
define( 'NONCE_KEY',        'yechpnpg0q1fv1qfjija3vuhh63jg20t3z1qsbqa3foacgisw2bc6lyb4nxq0be0' );
define( 'AUTH_SALT',        'ffyv4bdo4h6kgtunyvlgntoviraamz9zsp2ca103ey8w71zoqempgheadpcdtari' );
define( 'SECURE_AUTH_SALT', 'llksjwd9i0xenhgxrxskc5mm61kxsqjr2tpwk6ykdyzevsout6ghb3xdcvp9tgox' );
define( 'LOGGED_IN_SALT',   'y5ylixszdan5krsg3x6k4lx5pgz6qddryu1xtmtrvgi9qrjxtvpbpvyjw7suz4i2' );
define( 'NONCE_SALT',       'tsrx6eopgvcdkbmlbala9xsorxev3nlqhbyoylnmzv7v38t9sphin8rckiyemyr6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi4_';

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
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);