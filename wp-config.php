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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'backbeach' );

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
define( 'AUTH_KEY',         'JNfv~.=_bgi,,;K8,iH@1X*hQ+DE*bWDb!: 2d%ZSrZrC&^m*=],JI8hxR#x{?J;' );
define( 'SECURE_AUTH_KEY',  '4J3<%v.LPa25O-n.i`[YL4uw[ee+:Hxy~Ba&r<eOlLnq1tF4ggMXj=7DoKvNVm)K' );
define( 'LOGGED_IN_KEY',    ':at3f/Q6BR~y{@Ldr<cFJh%*`l1R+P{f,-aDNIDW3Ah,c~l:<*]O2V,8z|H-<ZB/' );
define( 'NONCE_KEY',        'OgeHJ-hOYx(tammbZ;$9Nw|DeWUBz]k5|fDAlS^zs^}Eu9H4LBVh]td=pn-83,n7' );
define( 'AUTH_SALT',        'xJ9_[$S^)`O~^@8>A~+d2<7$U|xtE@V2]5$77;osWw:No7@C$*c.!R,uhapeQRnQ' );
define( 'SECURE_AUTH_SALT', '|.Qo#{7IcPZYu~H#Ebp@*o7~Qg`ZWA%Th&jJj(;$Q&7LT#/GX@>z!gVSofjkF.i,' );
define( 'LOGGED_IN_SALT',   'Y(:,+5Bxko1zR&Bm?Ya W2GyzBF1y6n6`~jLv)X 4O(be#%LyYyVggY.Sh+;j9`W' );
define( 'NONCE_SALT',       'Z(QC!Ix)]Qz?%6P<0r|Z/7ua)bPE_)w(NaW`ar9)9!v)JSPvvJWgwiC(vnl0r C{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'beach_';

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
