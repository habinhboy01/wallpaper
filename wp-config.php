<?php
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
define( 'DB_NAME', 'wallpaper' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ll3=UT%m vF^,||VaqWFoF d,/ kgq5=0^T|;#CGn[(M^/lZ1%]Wn,}_R/gNvhf7' );
define( 'SECURE_AUTH_KEY',  'wBHgBib~I//k~4q/a2rgMwliI[FgadqVT~mZx<^vmADfSHG-^p)._$f,Q/BT)(`T' );
define( 'LOGGED_IN_KEY',    ',_$ ]30gIKSgs<#hJnS X|L0oR8`{OQog{_WXI%l3)~XHMD**Ch%<ki=fi5<hghn' );
define( 'NONCE_KEY',        '%,6Ef=^)?;WT:CVX3wXH/Qf#^p$VAPAOPq#@~8^O8&4RM{xPx*BX]zBy|f;6*[O<' );
define( 'AUTH_SALT',        'r6sIE@d)&D3!}?>95pXpD=_%MpdT=wQWj@3KIav]{MJ3u-4Oz==G+6%f,,u5BRin' );
define( 'SECURE_AUTH_SALT', 'u8>[sH6Az_&W<~9;S%yE[Xn:e/:n)dZ[z_*`<r*ieD6Ce(9e`Se ).|a~WqQ!I3t' );
define( 'LOGGED_IN_SALT',   '6NOvko(Yx0S$kmH;dcaOk}XmS2U=su:u+(vE8M;YAQMGgG)~#bj-)bnFE!_YP)&>' );
define( 'NONCE_SALT',       '``]4p]1#+Gb8;G93}*85peMh~by+M%4rMC.kn#(Q,yizTV5c@xuT$n%[n.!_|g|*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
