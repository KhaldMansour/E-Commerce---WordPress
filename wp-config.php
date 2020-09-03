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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yiz,ij1m7-0 ?fE:1g=CM&S={_yW@psC2l~#%Mt]T{dNx*$@vjqWWj[!qi$LIW#m' );
define( 'SECURE_AUTH_KEY',  'lAh`c7_9#Qbw#kQ4}3U*j?7)oV#2K*4NJ;e%in{7&NvO}phl?5-e%3/=+b2RG]oO' );
define( 'LOGGED_IN_KEY',    'A0428dW,1n(4jv$!]MWO&TTICu#.?]/ID8):B7t4/~`cN.Qe(gW4](8p]gTKd{fq' );
define( 'NONCE_KEY',        '/!a%i *R!1j>FRq#~N{Z!gn8rZL;.@GFsKtS{P=EFP^ DZ5&a0M;|Rhm|9@pV44q' );
define( 'AUTH_SALT',        'Z;UMcbh6Sev<P*hQ!GdS6|=@!9xrnX-5TuyH9Q7VLH_N=,zVYvdpZ3@[e|F-[`yi' );
define( 'SECURE_AUTH_SALT', ';<aSlWl,fQ-OK-dklr^zg]d?(N!XG%Tdl !y=zhp5~2J_3&NiXum(;8LM+nTqztX' );
define( 'LOGGED_IN_SALT',   '0gZST04!Zjrtpni]3cD;0Vsjl< ~J=L:>uchZd&%1~.Xhf.sJYtn?VbEJVf#@e4E' );
define( 'NONCE_SALT',       'CZClt2br!9-{tK-[o{$+Xu;pou>+6`#$D77qG~WI:P=^$*[=,{{&u^x1kk*Rs9SX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecommerce';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
