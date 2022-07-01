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
define( 'DB_NAME', 'kayzer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2`Q>] Yw<8L%.VNPs&z7G<u7/X4`VBdXA&;i7v:&BrL8PKJ@QqvV4U,n%J1=i`FI' );
define( 'SECURE_AUTH_KEY',  ' {![%[(b$<79*b)9Y3( wN$1;GW#76INh_ED]XI8]JZm+of5{vs_g-c~6_13A0tM' );
define( 'LOGGED_IN_KEY',    '#~Ig>.5;3W{RXuGMW;5P|dcJ^sJ!y#`?rF,jR7YQIo)Hc;thg1<kD*Zt1eZi^p5;' );
define( 'NONCE_KEY',        'ZVXu0^:10;1I)]6[yz8}i1h: kbCIKTGP(`r~Pz_K&Xi[UE;*2klaf<q^`x4.MWg' );
define( 'AUTH_SALT',        'I@u<Gk %o>)hdVf-^@Y 7@2J2L O^#E zHd0I6{}HHP.2 /~r`S7.;ziV+|Y!_L_' );
define( 'SECURE_AUTH_SALT', 'pNi&0jRG15I+FN;pi-X<CSLNm+{D7hfi}23Aw%;;=^& G&}lCw9j%FUf|91mSu!2' );
define( 'LOGGED_IN_SALT',   'OSIuS#FsWhS>|G3r_&CqqcDKbQ)lQ:C23M8R8;&<B>a0C4&M*HbEW}}~-PtvF-vE' );
define( 'NONCE_SALT',       'DnvIqU],+&l;P?%QjI7m9h.!8THY{?nU;D9v*#}A>?2sHLjk|w}R{oC?PF(llDa-' );

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
