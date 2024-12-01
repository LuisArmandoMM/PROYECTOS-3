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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cafe_raices' );

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
define( 'AUTH_KEY',         'Ie.lOP=13/+],T&L=fOjx60pQ!FRs+R&75^5,yc9rEb7y3|H.mMTB?t19|e_kc  ' );
define( 'SECURE_AUTH_KEY',  'DHan*JUruJ~ZH%KrfJmEBlg;CdRmc6yfkGP[(Z+[1Nfz,W<yV;7$/OeMwgvm67ls' );
define( 'LOGGED_IN_KEY',    'HExZP2CwIm 8EsrZc[Wf`A;KR/e/kLRh>7OS_DNo2r1#Gxw>xsfI,nF25g ^W[Bw' );
define( 'NONCE_KEY',        'ga{Uya@)~s!AsXA;;}-wH$j,vsUgny&:~Na3asKH?|BP[ gY,>yZpU1|#dDl?Bq0' );
define( 'AUTH_SALT',        '?&CI{v/^Q^$(/{UEwM`>&evwFlZRsL^iNUx_5XE5K[&6yjr{8&qIeLgz=U^hI:)w' );
define( 'SECURE_AUTH_SALT', '<=Y^WNK66%(ZpbO^*%iPuN48@v=7Xuxt=txp9laN9;2E24(N!Sns!^^lTo0)a_fU' );
define( 'LOGGED_IN_SALT',   ';M 0(u`LbzCY*Y9agK+E~Fnyh3PU=W}m<kHVuL,..Mf{J_3-!x?Y9LBg-p{a$Ov9' );
define( 'NONCE_SALT',       '{K+%e2?Y#SuQzBSF;fpyUa%5W2ZQsDL:UvHw);My&S~>Y7vg9.w6%Q;TN(cgP&[+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
