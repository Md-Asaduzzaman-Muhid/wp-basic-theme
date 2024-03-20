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
define( 'DB_NAME', 'wp_basic_theme' );

/** Database username */
define( 'DB_USER', 'muhid' );

/** Database password */
define( 'DB_PASSWORD', 'Muhid2277' );

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
define( 'AUTH_KEY',         '8Dk)PeOy*N8Um5rJ;sAU9Ir+Ig*J9A;[Y,I/t(JDHh.|4sH5I Q6t@e[uS5&#3X@' );
define( 'SECURE_AUTH_KEY',  '?u@&%-8KgO&jaNDjq3$=I@m|r.cz`r6y^s_3ht@KW(PF6eVTbQ0wxo<J0#FU%)[<' );
define( 'LOGGED_IN_KEY',    '6j4xilK%v/fENimS%8.0KQ+I3]_}gDZ6LS`lSIm0N;[ZnPq.VP#MaghU ]hmb8pS' );
define( 'NONCE_KEY',        'G_9B1K>kFFxBmHqSz?sIucY{3kTdckrr{M:sf,R-qW5,%rB^$9a`[!&}FvB.R<Y<' );
define( 'AUTH_SALT',        'Mr<+uv^GN/?TUB3qq gUss7cdiB,z]9[XH3xBPYyDn6&X7|$,i>C;vRYBJ};P$J%' );
define( 'SECURE_AUTH_SALT', 'l* +sku6(ylPs:o]d9TzB$o6L3}#:dx:CTQBz&^Zn,Sw(a}B}u:*N:|fm?I!=bb$' );
define( 'LOGGED_IN_SALT',   '5@i|N(%qN,(=Fbl_|6;Ub.i7xwm2qD$E>ak7?|nU>D[;<u#PL;aIm)~GDEE+mNt#' );
define( 'NONCE_SALT',       'IX$F?B|%Yb3j=OkYooZfB>9vZSCwzIb[O7bn7,x6iA 9jzAA=l?3w1*HewZ!gfXr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wbt_';

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

define('FS_METHOD', 'direct');
