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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wedsach' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Q`AMNy7]yJ)5b4Ms~s?QJuD2/EFd&TrZv2I28XQ2Y^1<++DlGT5z`u|S@QD[D3h4' );
define( 'SECURE_AUTH_KEY',  'D)5+b%R-UT}g<rqnZCc*K2A26~4917E*njg)45hG(MBwwSAR0DD[Li`]nIY#R%;>' );
define( 'LOGGED_IN_KEY',    'FklZg{UO-%zK#zv]<cY(gXn*DY4AbeB!-#l2=UB&6~Sm6OBOG!Z$]@{4N`n2x.P/' );
define( 'NONCE_KEY',        '(X&>b; U~i]}YJ`wYh~tCw2@O}P:m~>0Kp!V{V)>{G*uX;v;Z#LY;#i$[UIHztyo' );
define( 'AUTH_SALT',        '}O`MSWdPIT{+YQQyt5O0MjW^UZj66VA2}EcmQuk[PyRL/u77>mv]~:vN:zHYQlX+' );
define( 'SECURE_AUTH_SALT', '1nU]A/A-K=%8l-)Rw{R#WAetUTth9v$h:U}Rz7k sGUrzDsW.L%iAd%urI|#f{}V' );
define( 'LOGGED_IN_SALT',   '9?j5So#aUN[?6&~H6bn+5?76mySLu}8&Tuc|/IJT=11&*]aO{KSN_WXzB.lHQ-]p' );
define( 'NONCE_SALT',       'Kc$[GQbP,>3O7J9{[KoXS(:WKbMAYbDEV>Hhnb/Vmh*UNtDbRNV.-;2M04J;bF#/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
