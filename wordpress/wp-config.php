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
define('DB_NAME', 'wpBootstrap_html');

/** MySQL database username */
define('DB_USER', 'snbgl');

/** MySQL database password */
define('DB_PASSWORD', 'z7lN9IGAsHq1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KFMF8yGu&w`d}fy%}`Kupa-N~7Qcjn7ZPRC+QGM$&?/B&E*Yo/cMJF :b4CLd.M(');
define('SECURE_AUTH_KEY',  '(0pE{$R-mIpS#D_]2[7r~e+>5$>RhnH6_iU0=jU8WmS}=7>Gsqn~% nj@zG^bbJ6');
define('LOGGED_IN_KEY',    '}7-Xk9C6/3=eJRMa~x<$E00;:@jN)74lxiuB5}!FBiL8RKUk73CQ>lQ![|$ g#1n');
define('NONCE_KEY',        'K@%e0-Jw8VQBf07N4=7K;cG=htDdPq6-4PPBTz1uFGSl%`7<~woM8#|uf5H^,: 5');
define('AUTH_SALT',        'ZI#Q]nn_g+.,p<JG*DDp]Vp%ey++cQPm7c@R6CEzcyHLF@uG 2 *)I$%ks;hOC/d');
define('SECURE_AUTH_SALT', 'L5^j[1O7mJ*Grk.$c#R/Y1E<Z2|3B,+yA%+~QrZ#1*@0BpQJ2LUh0`9w~*N|Xtn ');
define('LOGGED_IN_SALT',   'g@O. VpD7BVqN+5FzL=[o6?3rMr6l2wHgZI2Dci1ZoP-B,m4P?i K}762v2vBBeo');
define('NONCE_SALT',       'SFPaSIlXys#dm.<fVTt9-0:t=dM4D&3A{4k*s8/ 78NSp !zoS&Ydy@pu+1>7*vn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
