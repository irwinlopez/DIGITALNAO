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
define( 'DB_NAME', 'if0_37412475_wp158' );

/** Database username */
define( 'DB_USER', '37412475_1' );

/** Database password */
define( 'DB_PASSWORD', 'MD)4!7Sd8p' );

/** Database hostname */
define( 'DB_HOST', 'sql301.byetcluster.com' );

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
define( 'AUTH_KEY',         'xsirs4pbxlcprerloxopeq1mufocdkjiy70tfgvgmxbbblmhifyhnukjbaoypzff' );
define( 'SECURE_AUTH_KEY',  'gvowtjxrddmiw1lhaph53t5zb1whtsqz4ctxrw79or2z7wa0utu06ui8byqr9ezr' );
define( 'LOGGED_IN_KEY',    'lktd20oi7m4ulwlfrkgmkuuep007zoouirwuyaizw8w8ujwv6a8spmlwvk9ajrke' );
define( 'NONCE_KEY',        'kyb5l4dwxzw2hxegdpyco8jt5yudpemr4iewrk2dthhqfjbk933wxrhcgs6msqyh' );
define( 'AUTH_SALT',        'om2tcomcmrwrrplzzgdmxvii7xnqacvrsqqwqt6emv3lzijrg8tw2zi5hfgfw1ow' );
define( 'SECURE_AUTH_SALT', 'unfsgk2bbiikhftll8v6i0xkm17ozt87pww5omptetxyjwrnj2n8kfytnrejaq2z' );
define( 'LOGGED_IN_SALT',   'nxvcyhurqtodxmj2q5nbvx4vuqeqfhueohpkouobc8curdp9whgarmahrep4i8qw' );
define( 'NONCE_SALT',       'pu2ywqwoewvfkjkpfnjgguvuhubrxvut6pkc7fdwfjl6te88pktpsaxzvnvypw7u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpw9_';

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
