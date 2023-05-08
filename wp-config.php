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
define( 'DB_NAME', 'sofiyjorge' );

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
define( 'AUTH_KEY',         'oxTCS$OJ1kY--ZzLJEmt*z<a C4-wt=D(hYeDRO#O7qG)4>_]lm)7v,g~Rn+[5W!' );
define( 'SECURE_AUTH_KEY',  'E(MQFp7/ar|]N/*BY{.{#BwVoomjFOX;du$_t9Hwj9{zmgG3RiL1om~4LvHehgtP' );
define( 'LOGGED_IN_KEY',    'UWsQx}@ciU+A )cH:^m//A+eq^$q-JN)auhVwsKPu3qf^(bt3#Z7Wi# tK%yE{=}' );
define( 'NONCE_KEY',        '^~s^|J}V+KH;cU1@%51Z><o.b<nUhar)7;xv$$!5a;PW~E%SC~^PYH%jkI5R.!+<' );
define( 'AUTH_SALT',        'H=$@*@[`vu-**f.78Webf`Y,HBN&by1hwI&N O+Q9_}FDPZwUu!:}Gf$7%E:_J57' );
define( 'SECURE_AUTH_SALT', ';>zJ3`tqsyk/%]yBJcPV0uQfH>]q;dO}WouknhdM!#d;Q#m_qL7jL1m,:FbfLgyC' );
define( 'LOGGED_IN_SALT',   '6(jp.uJ:SOhm_x`J kPsI<`i{HO=GxH,Y`lWtZK5sN}B)I;HGdpT~A?emEs)b^bC' );
define( 'NONCE_SALT',       ',)D4w9McUxb;^SVd{Tb~/,W$FrD,-FW5tKzSV]7QZe/!:${rv{bD&uIdn@>c;wcg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sj_';

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
