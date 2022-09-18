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
define( 'DB_NAME', 'dhruvin' );

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
define( 'AUTH_KEY',         '^MB~_Kgihrd!:tKQM_UV^hJ-zsonotaKny?K6c.A:.CDbPN473VxQuT=h=A;MaJ4' );
define( 'SECURE_AUTH_KEY',  '>cQgkmP<c JIV0V7}HX>Yu7h>d>FRs>H)3cyR%34S^$wBq$vh nXrA)[2C)9]*S8' );
define( 'LOGGED_IN_KEY',    'Uz&V,S> rUPgnct3+$l_UfgU}IY^fdg/&o#R]Qy`Kt+P7?pv==HmL{~,t5zDBD7#' );
define( 'NONCE_KEY',        'P%V*$q5)LR-.|s a 7ty8MG&g*B;/~$,]U{;H2hK)LM>nuaKcc{L9mIyH3]_wBzV' );
define( 'AUTH_SALT',        'aF0a*jnVk@kf;,$(z.fddtJ-5@gu3<#_jKz_8}~:hG@XXWxzT~q_W%=R>bad/f+Y' );
define( 'SECURE_AUTH_SALT', 'j&fUCZ>`h8A}`5%7mH|%i+?U1Z2tiMkVmZ6*Yj4U2sV7G:C,D-g0^R.8j3j$V=Ea' );
define( 'LOGGED_IN_SALT',   's@UEzi]Ew0_?yaUi pqeSU?Wpopd5U4SH`e&5~/9RJC.3)sP~YEJ3muHw[.H!S*5' );
define( 'NONCE_SALT',       'u|c8l,EYC*guJ(2CBBsL?y0E:+DaIvAjskSsHp8G<yN[nURwb/e8Z-1+(`RhOBOL' );

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
