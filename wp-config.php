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
define( 'DB_NAME', 'brandplus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@V(8Qm[W${(*M ,#@F%.+1f@1?2@UT<#ry,[Jv-;,sRUroJSOspP<t`P]}hl/<ub' );
define( 'SECURE_AUTH_KEY',  '6y<xK=xb!P1LB/-v X|v*{X3?dQ;f$!s:6l%J]75S(0W^:~9}d{0#{h)*1c[^mdY' );
define( 'LOGGED_IN_KEY',    ' +:@a{M/z5Yt}D~*X~<f<-t AGHN@fNsu{E5XH|*VVs&)NdF1{rwKeqlLe sW*3?' );
define( 'NONCE_KEY',        'okRfjf]Y.h|qh{}5 U-@#!?|uH<4*]j_0)+>G3&>*f&~d8eQ}3fZX*DJP}q=,&=%' );
define( 'AUTH_SALT',        '8+=: ;+sPVh7/+.-@qn5/^T~-f^/w`T}w-VajS.|O=C=FsG5e?ji(`;kd6GYW_(t' );
define( 'SECURE_AUTH_SALT', '^w:T0mFJBsjgL;0HR;~sp.312R=$g|S?0EY)R M5zzxwz#bx(lC gqaE^^(a/f_T' );
define( 'LOGGED_IN_SALT',   '@3Ek>-=s(QGl`ogQtSH_dW4Cr|?tN2eokCDFoV.r`{BX&XLfDgVc_-8V=P%r:g 4' );
define( 'NONCE_SALT',       '?3w`pwOHX2RkS8]Z<KHUG6-pA(y>8@`#g=J/9G>FcRC|D#p4c*<mEl?xaz m@OJX' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
