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
define( 'DB_NAME', 'thucung' );

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
define( 'AUTH_KEY',         '&BN=+;iP;*p:7#8S2q5avT9)e 9*DjG#6N|Y<=zCoKri~|]EM):1FRYt=fJ-w& D' );
define( 'SECURE_AUTH_KEY',  'tD<q^!{4]Gad/(N;2~Qf~=eE!uB%S-baE^@+PHV,ijTf4uOQ`2Bs6o]IA-]#Z)1n' );
define( 'LOGGED_IN_KEY',    '87L^,?fT8gwO/QF;Y801/xA(;|hoE+!qU&+Gg9_@Ph$wh?Jbcaq4Hex%=!-~l>G+' );
define( 'NONCE_KEY',        'NtDz*m_bD&1JCX G3Va!& #Vy[!G`x/b[X267HoJu2..iJ`:|sKiAv-f2;UBlv.Z' );
define( 'AUTH_SALT',        ']lti$we#v^{m ;3~BuMbL}b>_ 2m(G|<kUw/1o4z623oOIJ|jm^R](5s]s<gHO-:' );
define( 'SECURE_AUTH_SALT', 'ae:]]{@2She.>MHI@Kx&]//y]SyJ~JeTA/4<8TCZxS`E!p?j21O-rQUYD(4|C0dE' );
define( 'LOGGED_IN_SALT',   'vAt38Q=~mdar>/)jnBo|Q}[G%d*,U@o)hK*jeeMSuhd>`m%*M_iY_^N#x`;E5:$l' );
define( 'NONCE_SALT',       '9ZtkkjLPr=iRK,X- SHoYn!hFllT%g%I^gvhGbimpt{2x!b)w[pb2Ub) DqM]w9S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_thucung';

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
