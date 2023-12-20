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
define( 'DB_NAME', 'gitee' );

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
define( 'AUTH_KEY',         '.9dK$ERDfPF4 6wT<QyvJR#O:_c#gxvLQYuDn0[=AOni#5n*O8IQbJBbghXvut<#' );
define( 'SECURE_AUTH_KEY',  '*CLQ|xV1)T`f0*B@_1h$cPIYf~,_^9k`P^ds4jW;@)($amh=P=+@%S8Jy>*((5ed' );
define( 'LOGGED_IN_KEY',    'DXXsUERHSj#d=K4PZ9%q<rp9t>{fMk#5WQEeLPQ&~7vE%l,A6nb7wRkbME-8=lRE' );
define( 'NONCE_KEY',        ',.O?TZrI%P{[Uw(RK;lcM}It-CN_vzXMad>kw9|g]bme#~ 0I: xEv06hPBLr%=o' );
define( 'AUTH_SALT',        'f}1,3+CCXSc@wn(|kt)MJG^E.rGq sz-7r-Azu@AIb@W}bC@N^/A{D^%;|Pf?o?m' );
define( 'SECURE_AUTH_SALT', '#IkPiZuzw6u-suGVc#uWXX2TKTC%[$sl!A(5,44|Q#>6z=t46vy@kOi-Ye?bi7ou' );
define( 'LOGGED_IN_SALT',   'O:H}kwFX%Tn`{~gN^[WG}5=xY<D}#A+N_B$XaM>5zLSMced9i+*}YC.HQ@J6@qSJ' );
define( 'NONCE_SALT',       'dvf*}e|BLP%1G::413FLi*!q,t)RAeXb5Dj+U+QKD B)CYZjQKl#Qc{I#{G)G~28' );

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
