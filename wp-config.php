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
define( 'DB_NAME', 'erozgar63' );

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
define( 'AUTH_KEY',         'fG=qGd[6tf%pZwv_uf>&e[z/{#XY{FlV x2ktKNa<-|!*OuJir1[vCk}=n:Pf:-%' );
define( 'SECURE_AUTH_KEY',  '` vF;5+>ASC#{`uMk@(XMfnikmn(Y|T}h5{qb<~nHJzl:W+-|OW?ZTV)G~|q!nAM' );
define( 'LOGGED_IN_KEY',    'b(58L_}DPuT}x|M^1#yo XQ #?trd^SWJ1RX~D)nQL%Fi4pGg4*cn@iT=^Rgz8):' );
define( 'NONCE_KEY',        '?RO8^3-stbg*1p!Fts9aJNyJN!8_yzU+|Hs&|k$wL?g,O,eAgJcsmI[{7j_rnP#h' );
define( 'AUTH_SALT',        'b+<x$gl)lfE~`(c.rKC@2xZf+id~IJ@[VLs[?#-1&&/9j4)jTu 23`Kk_iD9:Hv5' );
define( 'SECURE_AUTH_SALT', '!2(^[`=_{+T@qtj8`SE|:utwS~Ax1b/z*gQfZd|5s02tgyQ7v~0>)5(>3FFA;q/7' );
define( 'LOGGED_IN_SALT',   ')6sg[#VC8%CPxMa$X(,4I$q22*Ot/p`Py,@mcmNT}||l;b#M/.?--K2~T19<2nXC' );
define( 'NONCE_SALT',       'STu;LmPG@hA5MeT1mg1c/d=|t<v*cy*b_3U)`3l`2>_Yr-QqPk1(ZML.b&1J4q=9' );

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
