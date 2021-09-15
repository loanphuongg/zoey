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
define( 'DB_NAME', 'ZoeyBlog' );

/** MySQL database username */
define( 'DB_USER', 'ZoeyBlog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kem27102000' );

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
define( 'AUTH_KEY',         '_]e`NrWhMZE%!!bf{Z17Cv$LbY?P*]g<T1bf:?o1IzeE?hhu=[u|iHd{+DGbLa$x' );
define( 'SECURE_AUTH_KEY',  'Fa+|3]_T+F=!VeeLm(CbX 7wY+p85t{u@_Uu*7[@/p$+Uwa>.3$.(niOVc6gp&T>' );
define( 'LOGGED_IN_KEY',    '~Iy{vIYMDk;$@Orwg7Ni)jQoE;{=QD1BO|ndx5!<33~ok6=Z!!BaBlN`)p>f5F}0' );
define( 'NONCE_KEY',        'b7{9]!;CAZ=Rv_RI6i= K/@Y0OHalmB0sz|F/4C}JN(v(7#Mx11x./#v0!GDtuSt' );
define( 'AUTH_SALT',        'tiY&IXHd$`2SL84X!B];xOC*L~Zu ~>`3=kw1@N:*[F_#-L9f@8D:_SF|1~|e_xW' );
define( 'SECURE_AUTH_SALT', '&X`1F6duDF])1utdqUatWkur<+~KAMia}<bNF#dY/S.?RW03tL|7Oa-ytV.2v)V3' );
define( 'LOGGED_IN_SALT',   '4[FGLep-Y&omJNV-|5*SLcFzs7`Brm%@C+Szi7ce)ZNt|A&Qz8NA=_*!vdW7sY>O' );
define( 'NONCE_SALT',       '.~Szt8_BCm}(G{ G^1W*j$OCC=78Iz?MHIqm<y=IxrCkYSNlY&$n@FN=I7Q0uQO<' );

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
