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
define( 'DB_NAME', 'automospeed_db' );

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
define( 'AUTH_KEY',         'u8/0CI-3rGRv0.T?x;G],wdZG7pK[}R3Pi}hN8F@b8KaAP!-NHycS0hCJ:nuYp)#' );
define( 'SECURE_AUTH_KEY',  'FjL*!+*0;2YjqjNX9xAv*:2e>xU]_xM=vJ|/,pk<P{.9OzP9SGgSvi>PX(5Wt@k=' );
define( 'LOGGED_IN_KEY',    'gg6|WPi&oRV/M7dXuDD` ;$DMY9a@:|_;Zg8DnQw~]x.kC^i/{Z&vS`(E 7]qYhQ' );
define( 'NONCE_KEY',        '%gJN4(FD)K^IXM:aH2z6^*_:FjH hcAa};SA|[!Ncf0p3KJXIp/]Lr2[iUC|YYuT' );
define( 'AUTH_SALT',        'R?KwcDn:-%cQ.dcgC$r`=dCTtLhf5wT%b&^zy((<C*+rQ9ByM?9PrKGW]n/]7}NZ' );
define( 'SECURE_AUTH_SALT', 'R8r.c@GUM`$050%*N(xp*z-h_ OmM}b 9E50R 7[H_C~}w+kw]ARh3clN?e}L7.9' );
define( 'LOGGED_IN_SALT',   '.NkP?O{rgupn?9pTDh5~R42Wseyxmi;>FJ#2/?MRHf|S]3iX,Ny[7c83$*!jvq-<' );
define( 'NONCE_SALT',       'Md=4%(klD{&RJeu2^^^|Xa_Hmy%rITtpru.< Z&x1yRtNr3l^)hsh$:#V>c+kT[k' );

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
