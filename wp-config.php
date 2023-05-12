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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'S%I5MZi/M0Vg[j$7iBymJVL?6DIj8lsnoCCNYeL56jO_B|_o:9?8Aveho7aybbwM' );
define( 'SECURE_AUTH_KEY',  'uN?)6Uh7 yXTTD`.jpR0y}M]?{Vx~T2b/! f|3l[vA+:1j{DHgD+k4C@oF*^v9:R' );
define( 'LOGGED_IN_KEY',    '|`&U3^YDMJ>@Zl.f9BvU0H=}oGiayuCz{YaG<+.,dyHCA@K0xVmQV{Aw>#n56xKC' );
define( 'NONCE_KEY',        '-@VAv2FWuchmY]B2v=!WxJ|&x$2qLB#P1ZU*I}`b2F*kGOtIr!E_K^DfftNE5(?o' );
define( 'AUTH_SALT',        'f*QOIZKDl<lY#^q0Fhqh-Gk>UH^}:(Y&lbI!LlZx^H3^jI7k( qz+<aS[9ZpR3TT' );
define( 'SECURE_AUTH_SALT', 'Vv-jCGbE#~3tv;526PFCJb}av+m~:<D-YC=Id%NtlkfYR%XmEJCauNefB *:gm$^' );
define( 'LOGGED_IN_SALT',   'XO:6TmCb6Dt@|54)cBdg^eNV`#oE<W4RFAaCHRk>4m!maYD81d;g]1e0,w%-?)P9' );
define( 'NONCE_SALT',       'oCrD>5k[?w-uCZvwJxgXGy.ckc9rEZHwL-n{JL%ll0ssc5Aayu+g@F>16.y=YIzA' );

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
