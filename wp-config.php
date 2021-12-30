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
define( 'DB_NAME', 'donut-diary' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'P^>/9VU8|[ myMd!(V0t*h9m7}>X.Qo{mz(r%GF{TG-~RV n5(s%1Cr7g.)*B.is' );
define( 'SECURE_AUTH_KEY',  ',Wcyo4zD;i)xp~r s;k&)Hm)bWU=HB9DCFOwU_}Pzv4AGEf-|xH/SjTL*>A?}~83' );
define( 'LOGGED_IN_KEY',    ')ccp,{Z3! tL4`dgXT*.xKm+i=a!nTpW#yM<p0o*|,nCsc 3!>[J}JK6;+5}9R|R' );
define( 'NONCE_KEY',        '&Xkx$eLf2)~zhBUi[eT9Yf`9SxHpKfg5_hLL2YVV}K)y`MM32x|j%7u VD?e/z7B' );
define( 'AUTH_SALT',        '&mr~va1Ilp_-m[F&{Uxndx*TiqPMA/*EMFc!a>!Xy/W@:e9ckH~9C*yP67t[F<f]' );
define( 'SECURE_AUTH_SALT', ']/*g&1<SA`[r)`Xy`kb>[9g;n&K90Ypt/woTK%/v|E:. j^z{a5`t[>wq/o][@d ' );
define( 'LOGGED_IN_SALT',   '&{@^2-HkLuAEW4}9.O?J065pxF9w~z>~ZTbypmh(u5us+jEwiK*F?,Jr|VE*VGY4' );
define( 'NONCE_SALT',       'Ytp&{|Z@MJjte6E<Ypbu#!,r>a>3.P,t!Ir6TI0U%K;sHnlIRd%C{?%1sP9bn2n>' );

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
