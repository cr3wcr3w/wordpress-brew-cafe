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
define( 'AUTH_KEY',          'o#SyqR=IenRt<4ut/U&d~`+VQL^0u~,/sH`x=A69<lyrDOd,(Y}lYH*c}g<d[V0k' );
define( 'SECURE_AUTH_KEY',   ',h<-2rQ$YAejmBv:Cs>leI&i97>tC`QUwIQ61gr>m{J%el7E/jw50`9;x90N`-z#' );
define( 'LOGGED_IN_KEY',     '}o~(dndwU$-yQhmK_R1MSC5mA=0xKP+Ag29r_mv%,VwM%=w[gn+}E)~N;_( ]*1#' );
define( 'NONCE_KEY',         '$LqpNRGMC~v9>Cj8me2B,/!#_q;NLYf0ON/t#z6];oJ/F&EO~6c=g*]dDZDjHc8/' );
define( 'AUTH_SALT',         'pS~VatLv8lm4Sx~ ba:|# 4-vydd<lPMUEO}x{3gjoO@kSGTY%z`fSAg5Egb[cNZ' );
define( 'SECURE_AUTH_SALT',  '!F%F1!5Ff@.aNpxV%ERVS:7[^-m1:`o6/$BAMUUgx^LC7) _k61DW)Rz7)VPu:mI' );
define( 'LOGGED_IN_SALT',    'UQL$StnTBNecB9`l.PWN!Qk.m2P|A+o~dJuT6LO_ _<4P,_(kD/j##f[(0*XO$pA' );
define( 'NONCE_SALT',        '=B5hqPl,r&RttS:s=Gwwr*WA7u#4 V;9FCs*U>H{O{K+owLG$8UTk+v,@HIoglMQ' );
define( 'WP_CACHE_KEY_SALT', ' kq$s% ]g~AhYH*sc.&&ib0Ty1 v4PT&.Mw/1k)NJB;[y5QDu!zR<?!,Cyd&_<)@' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
