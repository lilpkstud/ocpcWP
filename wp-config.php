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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_b8b616bc504654c' );

/** MySQL database username */
define( 'DB_USER', 'bfa54c3d3ecf21' );

/** MySQL database password */
define( 'DB_PASSWORD', '88fca7da' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-iron-east-02.cleardb.net' );

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
define( 'AUTH_KEY',         '%=2ag%4I*k%u}Y0[;:}lpAT6(2wBH!xfN,+qP4[06Q)Usb!TrwP-7op+%?YYrGpJ' );
define( 'SECURE_AUTH_KEY',  'QV#}/l;5J=#_JuD[1)-p9mN%yj0I}9kK[-50>&00Z1rJ2X{]2=f#KE)[I]2eh1mN' );
define( 'LOGGED_IN_KEY',    '(c/!TPLgBd.QDFxP5P,l %>DadxD^$ZP6!dF.a?`b?B,$lT6A|hJwPOV5=QTM8%,' );
define( 'NONCE_KEY',        'aDIR#<;!M(6wss29XF`PaQgUH|$.hKKi>NO9~cY^)_MKbD2W8#Qjr?,Q=GVRD z#' );
define( 'AUTH_SALT',        'tS @EN+N,~$Gt`#eU)A5(j1FZqv%3$K7bTdfE1P>`lgM}++;g6~MgO7bkr^h~bbX' );
define( 'SECURE_AUTH_SALT', '4-GYIJ8V<z$u<d}=VkrA]3=t2&~HmNIRo-vwL?Sw*b=s:kH0MN}V;lB.pcinGT8*' );
define( 'LOGGED_IN_SALT',   '6BE L=k4YHD)iq?p&3]X-qd~Rryb@_Way>yXBzxd<zB%efg&YX</Re*<juQ1hlz9' );
define( 'NONCE_SALT',       '-sJ7RxEJ=+]>f0S93ru(MnYo,?6gxR:o>#Px.scv}A5<kXqB83k$ 7xiz:60lTVP' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
