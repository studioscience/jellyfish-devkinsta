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
define( 'DB_NAME', 'Jellyfish_Local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'G6MzOmVv8AYUxcJl' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          'vvNg#Qk[sBvQw (Nc2)hTXKLf]6*y-%ea{j~M3_9!T/sX[`ftX1)<&j}baL+z{Hn' );
define( 'SECURE_AUTH_KEY',   '1cWL)KtD#GCLRgkRWi5`<v4Hu0>tZ?Cr1(zh9%YOmnDRVq&53jWD{/d!{=$ZITx)' );
define( 'LOGGED_IN_KEY',     'Z-j^{3gQ5cfW#1Q}N3Xt5ife PTnI$IrJRinv)r5ils+zOC>*F -_c_<y+YED+He' );
define( 'NONCE_KEY',         '{{S;M)Tin=<y )<6F_g}YS4YD>5GsR&$|$0TiQf5aG9jyBPF~A7$l+.EQofSYqfM' );
define( 'AUTH_SALT',         'S%1%:&^{N}#;N3f.c|4um`{!dy!yb{uCb[$U0Xk$P#iRk(SVbI1}sil]X<:bW _l' );
define( 'SECURE_AUTH_SALT',  'CRs.nD]0E#? A*HUx|W&xY.U>~20O^tgWENpErqsffGF7c9!)j^4h?#avMK@H|Xr' );
define( 'LOGGED_IN_SALT',    '/5c_AJe*[,uR S(,qF}G%&CBoT-@7Fownd(e-`%-=FHO6R`I^FNsaZ|H-|n(tisv' );
define( 'NONCE_SALT',        'uf(}<H?6|q-a%W*AU{:Aqy@A_;$0rYZ9sAP[ y<`*e9oq<knEPuqITW*$!/Hn_XG' );
define( 'WP_CACHE_KEY_SALT', ':5n-UR6?{7v$na[TL:Lj_`~FMtru Q0nzC4s&9835j:wl)7BE1p)y%7JP9^vq0Qd' );


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
