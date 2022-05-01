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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devproarafat' );

/** Database username */
define( 'DB_USER', 'devproarafat' );

/** Database password */
define( 'DB_PASSWORD', 'devproarafat' );

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
define( 'AUTH_KEY',         '(eysZF@)}!gOVbkcjpuajVOkBn%Sl!@uOX/uF^a*MoCb|rJBnna,uN# {[E6WhD%' );
define( 'SECURE_AUTH_KEY',  'R}~|:fV>N4r15Qv$picro~13v4OgJ:`P.$s/>v;Y:UV47Lp-&Wxs}z6/~0w683yI' );
define( 'LOGGED_IN_KEY',    '#=Wa)FHf</P:v`|S@n+<$}JG!bdB7-[.Z.TK*loZlXn9YMbWlzGyU98QTv*[AGbh' );
define( 'NONCE_KEY',        '^o#X-VU0[HZ:PO|P-k,apuNO]/#-+A/m](,Hkqln@@Z+7B(ZI5$xQQ~)[fTd[t:[' );
define( 'AUTH_SALT',        'vW*OVNd>fri,Hh{2y[GoZs#b7hcJ2iMkiv_As&zdz:1}1^kc^A*upOEI.wMfz!bD' );
define( 'SECURE_AUTH_SALT', 'v^PwS~&ZgBqsLkZ(0izz_FrCemg(}34RC+4?W`B$:Jx#na{z82~12!nYK]df,c1!' );
define( 'LOGGED_IN_SALT',   'LooQ$G}DtC$7zyhHkJRAMWF<P?|my-v8s=V5ps%i32U Rl.y33:H~P90lBNU[.G7' );
define( 'NONCE_SALT',       'MM?B:|7oi~V|yQ _ >s_0_$g5)e*YWd9w=&LjaF7fo*n]nguK4h3&RP-IK`Thmdc' );

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
