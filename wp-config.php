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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdword' );

/** MySQL database username */
define( 'DB_USER', 'uword' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uword' );

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
define( 'AUTH_KEY',         'xi:>T)r-[mi}i;f7qFB/802]5aDEP>[p1}P!RtJR(M$PmF+X5ytwu-n~N@`CJY`/' );
define( 'SECURE_AUTH_KEY',  'X0X_j3>WF.Ir8oQlNltpmlK<1NVJH1GBqBT^Hb%9V&1&1[9:khJdi1,$oWA&1y f' );
define( 'LOGGED_IN_KEY',    '>e)ggB+3AZ4?N?TW,% |=]w0YXR*!bJwXz?4W}S,bgO4:HEl|6|Fh<CvgsFS93e?' );
define( 'NONCE_KEY',        '4K +4T,nPYRlNbJ{3K)]mfTuA3f1SVk0SsS,2R[k0j@wXk~KuIoh>ve!0#?h-Gsg' );
define( 'AUTH_SALT',        '&[*H,,J2i9W&jZ%o`StnZDA8Flq7:9`2k)5B(vO&OK<r#R%m*Z/*M^CC~ut[z.=2' );
define( 'SECURE_AUTH_SALT', '-[z lc+-lmcOerZEuZr4ccBJ,|/ k]7R(:lYnXNn` ekW8.~S]}+[Mhp|*~[*4#T' );
define( 'LOGGED_IN_SALT',   'x<#eh+<^v WqA^bvH.UrdNFOZ]UP4PLZ]g~8!QW`Su;3u^0DxHN 6qz4BNZf^KJ}' );
define( 'NONCE_SALT',       ';@@I56QM^8Q8:<[|*DUG!T3FZ^kSJ|4K/ir.UBcQjnv}@MjIaO0Yh.uvgTS,uw;W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

