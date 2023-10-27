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
define( 'DB_NAME', 'guia_nagp' );

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
define( 'AUTH_KEY',         '^kj]/K?swqsn1cKa,?[i#95r>AejE/NY8G;BB&fMtEG@`XTX9uc|6h(L2|7(oy#M' );
define( 'SECURE_AUTH_KEY',  'A~GS@K&]n%M9W%Wmn.Eice[!^%O8{~Pnjz/1&j%GO6S]AS(5l-PBRb2uc&A$7N$^' );
define( 'LOGGED_IN_KEY',    '4QB90LAIGEPkeK:romlE4XI!_7zIe+Tp=t~l$?].,6%!wX.lZ>r/DIej q)t+;wC' );
define( 'NONCE_KEY',        ',_tY4#u_dWab6#0n)z$lngZ@FnH2:)P}`lth;81-TD{h<KN5IBZgEK[pYD7zd5Q ' );
define( 'AUTH_SALT',        'SX0E|T_-Eob9Rwh(XeQ*Ba9|+NCxDnRf?R9Rh ^+kV)$VYUH|-pe_XroU&eR$vX3' );
define( 'SECURE_AUTH_SALT', '#3MsGsV#Qb?&s~tBq5~Q Z;&HG{TfnI;^R&v7^<FRVf<|QoiCtr}4:V~QN<`2t^{' );
define( 'LOGGED_IN_SALT',   '%[2?(G?|H`{jn*kd3,Z+p^y@-lP+S6f6pB11!ah|/_K`jk]@/f_O59$}*=|7-d6{' );
define( 'NONCE_SALT',       '#I%Z%g?DG#pMu3=NiMYFZe;/YY6nl9LEFoQvINOV?uOl~&hBthC}CRoh-Jh/!bJ:' );

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
