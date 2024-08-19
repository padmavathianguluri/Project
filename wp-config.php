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
define( 'DB_NAME', 'Project_db' );

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
define( 'AUTH_KEY',         'TU~7*V.C+-[kOjtY*}S!Kbu=:GHl-J7E]L:fO[h>UNUC8b=;X;)qB#xV!HSW;*J+' );
define( 'SECURE_AUTH_KEY',  'bVsU)e!qPQT(@AYX8/m@ORB}t+@(GV>Zj=@-3@5c85?)DfmB{$n>Cs| /9k,kQcv' );
define( 'LOGGED_IN_KEY',    '(xU|r7]sYz)?R-Z_bu-A?&azuXaLXb.d=x//xn.~il4H?qlq,q|Ea( h.8W{%thZ' );
define( 'NONCE_KEY',        '+Ap9U83sbJJC&5RPo9(U$Z{4H#2I~z@/!o0*?HAAQ UDP$>(PBR9`[i}QCjD#0z6' );
define( 'AUTH_SALT',        'qxfki-L&/D(TR?w@5MorCy5MH16G)u;#4=tk]G~TUJw$jM:KM9=6S.F+`sQ9Yhm:' );
define( 'SECURE_AUTH_SALT', '=!*-9)5|e0_S8/X{$SjFj![5G9W%O[pkh_$BXqf.ukliF`}&Qo-xED)_A+=i:c|<' );
define( 'LOGGED_IN_SALT',   '>mC^VR=38P~C?>GE{39N|u3/nNghMUKlJOav7D+Uy?MlS-nd]hah47r]stHmEkrZ' );
define( 'NONCE_SALT',       'QS+ES],x?]a2!MW@mztl __GU<#CDsx9WC&G];u5M9I+:pl&TFH=S%KRnBGP)P8)' );

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
