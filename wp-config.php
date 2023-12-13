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
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&eTQ/tPaPh0*y#^[8tcLZnR H+L1s,Yy:XO=,V 2RpXVNva^r,len0Dx-n+vDY9A' );
define( 'SECURE_AUTH_KEY',  'Lt)QZ63Hkd>u@0VM]qn1siMg|K1CR6F-,|FTaj@%|Fe*Zciyn$chw3{BZOm}7f)R' );
define( 'LOGGED_IN_KEY',    'N&L[{b<c|>*B;t7mvk3{MNzqQ9fRjbRCN.lu]seX/z6RT[},zt+u5b+C!-Sz{xo3' );
define( 'NONCE_KEY',        'v,Fbc3%4ct|!E~`)IFoj@j_IE@erR-z^.YC{tc[#+j;{@N!)$bSUn&UM;W37YHdo' );
define( 'AUTH_SALT',        '%U/h=3ZQ@@*Qe#!L-G`~aaMbV#}L&e^T)JCxf.|6l1PHI }#6W=01$2u5~&gK1oq' );
define( 'SECURE_AUTH_SALT', '{c)ysjScuooB>nSR@ cmPE? 9^{YwNBx3-!K2wc+Tz)P2K]=V6+DnmFac#%pG2Sf' );
define( 'LOGGED_IN_SALT',   '[UZA,>hqFht+R/&BbM}g%3hOmwfi!CWS(8Sc 0#QT=b6t]eW{E%0=SZybDqhHX+v' );
define( 'NONCE_SALT',       'Fr |Lqd=1p>-LlJbahe>pK$:>oielD@r8qhh78;.YcE-pCp>}Q$k*dC4,BejuWVT' );

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

