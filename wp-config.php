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
define( 'DB_NAME', 'w6' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';RyqlK~GG0G<q(N<-{!Yb;wG}/OBz[(]N?L_g:){`e(@yW9(@Tu#kldQbMc7Q`2B' );
define( 'SECURE_AUTH_KEY',  '+^C?zjQ)1k=;DrKS}(u~8/gp!K/<MtI,z68=ffkQS*HP6T=!To ;gOCOx_3*[g:m' );
define( 'LOGGED_IN_KEY',    'NF0`U r.qiV6IUaV2%LHM76c@Sp6FjQQ7rXa7&N$bkm j(RQ$r-i830o(ViV`$dL' );
define( 'NONCE_KEY',        'D-b@kZeAN}6k]:Bwh.R8`v_|{g 9s@OrN^z<xTf!*i8MA;[.}r:j2-*F!,X?t![N' );
define( 'AUTH_SALT',        '6,*Q#7r<rveCI:zaAnQnQ*s$HV+cgLSegudWd[RdyC~?ps!iNs!dU uk]/#%R-BP' );
define( 'SECURE_AUTH_SALT', '/]>-d|Lx>i.IpFmIZA-xM!C/W}|gs@Ba|LO8^l8i$x^DhpV/WrCMu?Gn-.C;!r)<' );
define( 'LOGGED_IN_SALT',   '_J$*i/cMS5}|8jfL`-dVR,zup%&S(9M$m>HwZ)vicCb#MYS1rX-,m>^KD<NCW!0;' );
define( 'NONCE_SALT',       'HHM]9c~> =hTAnjvrs RpG3rx>bT/`CyxA3X5^D?Q,&15S)X(GppVf2Z][BAjDI[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
