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
define( 'DB_NAME', 'newbd' );

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
define( 'AUTH_KEY',         'fuSWAu!3#[{m<0Z!&kNrr2r;GRTBHPx`zZhmX`qS=j`f])`waVd[Ex-[4Cr@C&Y9' );
define( 'SECURE_AUTH_KEY',  'Hk)f7yNbWO#H?zNyFdmOp+$pSo=+la]I(!Ld3XOo=-`3Jqu-rcL]zJ#: Av@*cs+' );
define( 'LOGGED_IN_KEY',    'tKB{?4QaJa8s/S{`t|{o:OjRNc|iC%mfe9y^!44m|$IB`c#a(=^;i#f&kk`@tGPL' );
define( 'NONCE_KEY',        'V]$?=cf!/of@Lp|w,^>[5S|`V[?KqY%z[mzA1.VQN@CDW] [7ma96ru77|!o#Uv7' );
define( 'AUTH_SALT',        'Wj3%KUjia-J(JB[C9f?,q!qOJ-E%`|Q2ogV<;_?~Syqpw-i_RQn[:-iJr.#:6Kn<' );
define( 'SECURE_AUTH_SALT', 'U&(=1}Lc$]Y>{;5_Tds8|wpKU5d<mus$>xMlhhGJlHD#)ki/.F`X/[F*mpk:D9,a' );
define( 'LOGGED_IN_SALT',   '-I,!k`twqR7KzJFI&XwoKB<-E,<z%CDc w%2^QL+6P0*>8QOI5jiK1v$m$UwJJ/N' );
define( 'NONCE_SALT',       ',4P0vE3|78OELx%>OdGL.K5<kU;6zsCsyHeSsOBM1E-4EGu!M#FfK?/)$hAe8k8m' );

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
