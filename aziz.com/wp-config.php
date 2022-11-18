<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'aziz' );

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
define( 'AUTH_KEY',         'efGMU#1+b:9fWIy}GTM[Gg{p]J&v(DNbY~<{pm1jXjODc4mjpa8~,RmA*st@N3Je' );
define( 'SECURE_AUTH_KEY',  'Iae+=77_EKgi9%qN/ +a1zU%:Az6?,=`hYqxV5SW;s{Zgwetll;ET/a5 ^jvDjy#' );
define( 'LOGGED_IN_KEY',    '@XLLO`kF<1hb1VX=jM.IRz>MjH@lwTd^Vdn=Tat=&yqL_)7w4(8D!eYcgnc |a>d' );
define( 'NONCE_KEY',        'Lz; sl^8Py~|N@PV@6(VKz!a8z$kkUp_X&boT+~t5O#eXEv.;-,Gkf2>z,*_ [4%' );
define( 'AUTH_SALT',        ';S-=J-hLnRv:qayf:Y{9ik9D7UOy?g#NPcPrp*XxY?0 A0#?Mm72P&H3tEx9H#6@' );
define( 'SECURE_AUTH_SALT', '}Zaq^LqcpZ)%G/K;$C *t,PH;MbQGy|yOvai3%yw6$T0oA|.er5@_TCu@}@4iy7f' );
define( 'LOGGED_IN_SALT',   '}Mx_Xrvn*HcyN3@kY#6JMeChTGe/EqZ0knv?}wWj(;+/-p=gcf_FDd5^Lj_ZZ`pU' );
define( 'NONCE_SALT',       'C9+_k_6~}VS32yLw}u5uz`.,3~F([QY>~+o?CASAVJZI+v9Z<0l36-kQvO^n%TrE' );

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
