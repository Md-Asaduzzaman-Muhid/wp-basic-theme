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
define( 'DB_NAME', 'iosoup' );

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
define( 'AUTH_KEY',         'FVA@Q9gg$,/PuD}CbsC(T[U{Ve#V&xJZO&YrmR} 6;au;=n,p(D=VxRZrZO-J,;y' );
define( 'SECURE_AUTH_KEY',  '`|)~U=/Sb}9f<&/(J;X1B]e.AT=#N`r54D]p1> bW8Im{+>%n;6Jsd7 l_.eKRA#' );
define( 'LOGGED_IN_KEY',    'N`zej$+~a4-%5?T ewf|BZQ^8]~>ptZ.mj/S^rdaTF%!]Sw=_3B<7@z%Thvh<):]' );
define( 'NONCE_KEY',        'U&J0+lFh82.SFe:k=hqo{IXr_A.(dSaN?Q*x Y3X-coZ?wTFA9$rLAR]P`-Q1igU' );
define( 'AUTH_SALT',        '2^P:`Qhyr(1)tP9Pxv?Y Y9JK5`2pDkpqS|$L^6j(/i1AsrmU~2[3fwiAx>YZHf/' );
define( 'SECURE_AUTH_SALT', 'A20Z^4bSMT:j/ *e;!`(56p?Z<>2{6+S-{P;N?)wqga,}-9&H.]|OZ}c=)ky ,EH' );
define( 'LOGGED_IN_SALT',   'fd Bxr#BWmvPL,T;Q~2CFF8U6rB1e$q!?{l=k&tz;FeF!z#1JoFv3?1lcx1^DaAN' );
define( 'NONCE_SALT',       'ck7h=9lA(Q`h>1%2JZefSQvDhs0k;iDsJ_/@:b|yfz$+uP]FckH#mH_#*U>KAH$0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'is_';

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
