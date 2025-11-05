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
define( 'AUTH_KEY',          '}$4a3msZWow:Be}?8[a{WQ|!KbjL>-I)R/m17H4_=qk_NMj!!jXBIFU24/Xa;ck&' );
define( 'SECURE_AUTH_KEY',   '(]YLyH&rt_+=MT)t}}Xb!WG$_nRd{HW.BO:^HYP=jR{I!Y!LROSXL]I%Z^XBiu.R' );
define( 'LOGGED_IN_KEY',     ' bWC+U+N5S9=A5s ejNkhRO-F.G^Up6W^U/#3Mnb/>52ej4S=A)!<`F]B8erOG1T' );
define( 'NONCE_KEY',         '$keU6q8}t&^+qyMPBwqq,#dAR]WWI8,EW<]gc6+cJ%}vCbF$ox:]l_zh;2>+K77<' );
define( 'AUTH_SALT',         'V<j+*N6j[FJ|]M}B Ym9AR 9=:3gEZcSr%EECQ}}[m1qB{m1sLOSws><GxF/{PEi' );
define( 'SECURE_AUTH_SALT',  '|5Sd*tCk*~Q8%q<E=Qj}C$34dIDT0x_`x9B}q]5g.`UYO0l~}Js7}v}JRM,LhR`m' );
define( 'LOGGED_IN_SALT',    'KmRB5c `Lgh>J$.:XDdam+2HYoD)^per ^aQ`nRkVR#J?)b5Z4xeBGIc}>#@32^1' );
define( 'NONCE_SALT',        'LewkCojv{JZM(GFRirjP]#wANys%BuZd-a.53tiL<Nj$qAGl~11tC&ZT!g6z-o]F' );
define( 'WP_CACHE_KEY_SALT', '3Xfhc>}On;HuY}tyE2ZDUEQ7N4$nZ.;1dY,0RANb^=s5MKobsl;Tq*9$Z@`XjO$Z' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'rentalstestwp' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
