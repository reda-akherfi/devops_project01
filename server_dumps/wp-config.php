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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'REDAWORDPRESSDB' );

/** Database username */
define( 'DB_USER', 'REDAWPUSER' );

/** Database password */
define( 'DB_PASSWORD', 'Tzbg5340' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** ## Save files direct method ## */
define( 'FS_METHOD', 'direct' );

/** ## Increase memory limit, 256MB is recommended ## */
define('WP_MEMORY_LIMIT', '256M');

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
define('AUTH_KEY',         '?@:gUt=7,4^M:B5-?>i8}.bUjR/;#tbu6{g^jcKmTZHw|?NzRa<K[kw Mp#?G-~C');
define('SECURE_AUTH_KEY',  'd5[WHf;+l9Ii)z2kXRpV|nCDB! !=WETJ1uns8i[ 2 5-i+Fs~DA/|6]-+:KCIQs');
define('LOGGED_IN_KEY',    '!WI?7s#|cTO_MIs85@Na1rkC91n_|E{]iU-kYN#X$c-9RR&h~L(>)r]Z8nch0-:Q');
define('NONCE_KEY',        'kRg]xRF_@_lQ10PKdbO:b-:F4A;wl-?cD!jVO{qf`X8OIKq=i[+GiKu2>#qF8ts3');
define('AUTH_SALT',        '--YUz*f|dP{zVObJ)L*hTaF>y]!LoCaprk<w]n5yA00}luP*spn9+6YCUc%]DDue');
define('SECURE_AUTH_SALT', 'XonsMY|5xd~g-mGze te@9_FB@EYj*~ab|7T{Q$y86%>FK@k_yG0}i<O?y~L)x6-');
define('LOGGED_IN_SALT',   '76}.%V:mha^_(sGBm|Iqg9TANV<5GclctrD;uV/x$g&4iPY?tPj0r_S|Fxl)j`}u');
define('NONCE_SALT',       'JihT/=o]35Q+T:Sb(r):X>&=8pu+gHnyqh>|q;l$K$gQi7j1Vy#p7{8-hmKTu+z-');

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
