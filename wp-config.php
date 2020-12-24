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
define( 'DB_NAME', 'maket1' );

/** MySQL database username */
define( 'DB_USER', 'maket1_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bP2At6XCY0dGSQYf' );

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
define( 'AUTH_KEY',         'XcD&SK;`PjrtxUXZj.t~vF<#TEts+n/aOaHLvbVBIxLrPBUxMxK7&.C/U.3Wp+<W' );
define( 'SECURE_AUTH_KEY',  '=#BO[qzUtt+!70 Nl2^74*6F%`POsQzWcQN%]MfK;c$d~V,?/H>Yw#DG:$KP$[yE' );
define( 'LOGGED_IN_KEY',    'bCPuRX2n5Cm~o|{X{;}BElKs-f6^HOV.cai&mppHZi6_`TO-WK=z]R7]A:$]A8zJ' );
define( 'NONCE_KEY',        '>TN<AZJKSeLE)YPj9@A3Y1q>0HtX<AMG#^tou.( @`W-R>9zWv4?m~,7YrhiS@&C' );
define( 'AUTH_SALT',        'DV2,W|I,#RFtfH#0dy)8?;c|8v>,{/@]$[@mvb@8~UN`)IJV}bE%]<<gNtf_OU5=' );
define( 'SECURE_AUTH_SALT', '^|QL<~V)ZDz8K,YV~(c&9:mk=miJz*oo>G~jiLX5j^^%9~ZP*>hnx PFHlrAv^F7' );
define( 'LOGGED_IN_SALT',   'V1q#K91h[eVDc@5P<|4>`Wm%M(A}z:Kq>S5/YCJ56R>O#M#<1`f/9&4X4D;t2f[_' );
define( 'NONCE_SALT',       'W>S-y%sJ|&CrL8wO#5t-d4x(>5^QQA8:Pu=W7(qG4 DHH^A>=Y7iF|8+3Hw=D>ed' );

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
