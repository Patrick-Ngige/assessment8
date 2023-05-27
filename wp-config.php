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
define( 'DB_NAME', 'tickets' );

/** Database username */
define( 'DB_USER', 'tickets' );

/** Database password */
define( 'DB_PASSWORD', 'tickets' );

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
define( 'AUTH_KEY',         ']gNd./k;iJj(JG&tdQWG+~kp#VtV54x3exfg>C<ghy.EPGC5+]2?UrpNgt}_*Q3V' );
define( 'SECURE_AUTH_KEY',  '$.}9hc/YpQmK3x(C@D$}b o%i+yz4UznrHkkpmsQZjDbnAB!8!d(;]Mr!GzTqg>2' );
define( 'LOGGED_IN_KEY',    'eti=B,kV~eN~?%(tS94hq4zoY,JH_m+2yvw rb*m4qTkgD@}z7w!9%S|`f8?-aV/' );
define( 'NONCE_KEY',        '[k[I!PD5`Op{*Ph%G$%iIqh}qiEWVxrdbnGt(&cJa{3Ei)INXd(lRg:ep8~9m@CQ' );
define( 'AUTH_SALT',        'RAyZ/LyKZb>O~JhA.]YI8?v:G67qB[)K[>CuI8:0aJd<%mX#Vi xnkUdEIP{b5Jr' );
define( 'SECURE_AUTH_SALT', '8E&OB_9QM@M.iwLyni=ECRE*%S-p7SJljG^Z=Y#%:6g?g,gcZvK3<lTl$$7O[!Cx' );
define( 'LOGGED_IN_SALT',   'al/lPt~HyyLH47-)!FmFS??B-i+0>n,8R>W(]Vz,F]>(^sMlmM@|a;Sh(`]~=!{a' );
define( 'NONCE_SALT',       'cK3Fy):EQLhc)CJbR+kE<1_q/bB%zb(y%|%@$qN>JKDc;Mn1hm33TNNU@1y|11xM' );

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
