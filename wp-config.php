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
define( 'DB_NAME', 'ecommercestore' );

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
define( 'AUTH_KEY',         'Td{R ,fq+ )p7A!h=S| Vmpnbv}r;dOx?Df eFmV&w1z(<]PI)[%Xy;H.P[sLs(O' );
define( 'SECURE_AUTH_KEY',  'E+}?gj]GukhTbGE`^ymv<efUWuJ`dGLet}5NhlA-W5l.cMRY1A$H!O#<8.<|}vd!' );
define( 'LOGGED_IN_KEY',    '@F0uHYZW5.$K6Gn6x#cA7oZGwZqw}BRPR.OkL1[:b[258/1]A:_c36<s./7<!x;n' );
define( 'NONCE_KEY',        '~xp;o,e&K[*Nzr:?(S%qC:.x^F`z}o&tQ!z [ZhA`67_dL]MJ2?Rm&9I$n|@<2oa' );
define( 'AUTH_SALT',        'i-&WdL},c4Dsa(GiZE!EynmyOJ?#Soip~x.D]o>;Ou6>;N .:gtT4wIF|j~|R{R<' );
define( 'SECURE_AUTH_SALT', 'g#JvX6bK;Vl><Q|w+S@aAkIF[>{*EI3@]T41/U5L:>WK.{(ATwP9ZI{}ulgS&Dy4' );
define( 'LOGGED_IN_SALT',   'e=<MC}$lK[dFiSGEk5KTXYa])<46Rz`fS1V[H65_hV]E.0oMGgh,mlTv{*GBHJEJ' );
define( 'NONCE_SALT',       '2i]jK*|O;~zS~.|Fay*+I^p9BkTNml0gz4LwDW?@>8R#xVRn.1=+4&$0.b 3 gef' );

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
