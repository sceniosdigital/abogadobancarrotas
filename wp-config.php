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
define( 'DB_NAME', 'lawyers_successful_db' );

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
define( 'AUTH_KEY',         '3-&o>/pAE:lYV26TcHr}5Oa p#L-b/+EZRgP9f&7b3c*Z#b@ FLuF9/(!!>i|`vd' );
define( 'SECURE_AUTH_KEY',  '1/X9anJ_a(JN1C<!^scce%v]]xhrp@~J1K8d 0g1iHl/b>M4;n%VF(/uyYgG3UUZ' );
define( 'LOGGED_IN_KEY',    '+^^yo+QZkC|<iuw!)u|dPELY*V M!+|F =*I4l)Y%HS`$Z4qZ)=3$&mMgHye[;T5' );
define( 'NONCE_KEY',        '!/E8Q!|t8^0v6=tnpGv%4to,pwOkzKMla|-}v?>>Z$3AsD4EpSmnU_AuQdoKk4j9' );
define( 'AUTH_SALT',        '_r!k&0# Qp[(9E>YW-.KXc.1}vyZ=d*us;a46!}Uo21)t{Am!XVrqiWhJrJX:-Hz' );
define( 'SECURE_AUTH_SALT', 's8iN5{<zUhP%1u0D,:-YF5)W):$n1{5*T~Q&>gpqGV8B(:,bBX4pD/Wb^~nwjX(R' );
define( 'LOGGED_IN_SALT',   '8rVurSA;+4N.{qZUuNIeYU(|nk|&V<1.liNgYk@WtJhaR~hu5qRMrVt3=b#qk*1o' );
define( 'NONCE_SALT',       '$NtIs|E&a(?yn,n+2ne_G$tE+./rS7-Cs?T=^[:C_5ewJ#<dNHn9C<U8u[F`bA^x' );

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
