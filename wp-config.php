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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'U5YKY)6HgrQe$GV^xw.g`ICx;(R5R2r>=j&wG*t=LRxg[;&~lpks@<O0J/r^Ns9A' );
define( 'SECURE_AUTH_KEY',   '% w[#TmUe/;vV{w2hnlxL>?3Mo3?^h]Z=1}vk}C,*A7Lh8CC6XTD!rA93C3v@T{N' );
define( 'LOGGED_IN_KEY',     '4My@dB;ZaR2U&[L:A> oKiXC%]~q%$<kKl+,dZ)2G:cD4tS|gPhqsL1TV(WcwS+y' );
define( 'NONCE_KEY',         '+Qqi#1/F!+W_!e%!6Mduc*zNPT:*TV6s5ri1Q^zUtEF6mbsEXH9i2X ]LS^YYz8*' );
define( 'AUTH_SALT',         'mfmB0+aZzaQBgp([79&pa[b#L.7,Ppqi>F8X3v}xP[Z0a4u-3}V!9+9cW%Mp+h4f' );
define( 'SECURE_AUTH_SALT',  'c^+$5TAX57NU1h0=Vah!.geoB8 6EoG9fy(V<x&QG2s1kGR:USpn*3>Ll}hCt@tD' );
define( 'LOGGED_IN_SALT',    'QTNmP_K,{YYwX4/Vtl~^C@Y@MRR4Zsdf[Y|95_Y^KpyESLMK444U/ims u{j}r=9' );
define( 'NONCE_SALT',        '8)QGg|J#)Q H+k`[mX(5+AB||/?_kJ1WU[V`VDwZC4g)>>d;|d/X!T ;ZlgIPWuD' );
define( 'WP_CACHE_KEY_SALT', 'H%sy[)a9N#Pb*{#NRx0yGac|$z(Z;PJ27fxzH;2VL<ax2FjS(Idik_&S0I~D/PLo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
