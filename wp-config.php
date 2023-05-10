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
define( 'DB_NAME', 'bdecommerce' );

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
define( 'AUTH_KEY',         'sqo,i7KW |`uqb@pYJbQM%>+ge?<:?m7E8aLs-F-K%EkOf%l.ID,Rj!l>Bm=<FmL' );
define( 'SECURE_AUTH_KEY',  'LFZMm>TMSGjd4TrY%oF4Gc+f*7`-2WT7IO8#6l@ME7szX9aOz.o~sceS`PjY6!wg' );
define( 'LOGGED_IN_KEY',    'BQq==x> (G<P?$w^,molIdtenIQ!0b4I1OI}e4!ayiikN[;w|ECj}v.K(qW=F1u ' );
define( 'NONCE_KEY',        'I^3nhT.,;+I9^x;(@[@2s?o+|e1A<0.0w1!KSz~;+&Ealc!`yh=9VgDAU$c<;u]/' );
define( 'AUTH_SALT',        '38*(h6 u7WS*}|mQ};DB|W!S$8z8y[9%3nu?*_}<}.iLeP1<VWz=e$2$|;e%xwBP' );
define( 'SECURE_AUTH_SALT', '~[sWr`_]f7Pg4x+$RV$!/sa}6{++_#y16V/N:lPz1V;~qtT``Y2]p`ubICl+7`[h' );
define( 'LOGGED_IN_SALT',   'wsKy4j=]m[J2/IU|ujtQ;PTLu#Y7kozd>qsw@LA(v|xn_WI3jik/$2CuZCd1Edzc' );
define( 'NONCE_SALT',       'Ap7-+Xfh|WNqz.[n6L)6JMIP(.PXc-tJi6M&Xtp0+%Dco{dYturZzX~c/ 2q33/H' );

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
