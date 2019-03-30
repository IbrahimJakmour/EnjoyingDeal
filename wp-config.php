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
define( 'DB_NAME', 'wp2-A' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bubbleteam123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=G@n.#Abx_Ex)#!O?m{T)FSMqae]FF@wJE/Y3+Xvy}$XZ8-/C^^g3NI!veb@*?J[' );
define( 'SECURE_AUTH_KEY',  'nqyT{(#/WgBCr3uE^w&F}M6<3RiPWqK-mcIc2zd$v_chop7^5@afbiXna$SLX2R;' );
define( 'LOGGED_IN_KEY',    'q$4~6q^I(|7QZRnFnWZHv$gyd<O{c{~-!-v^PLR0,5=^n;7#N{UhKNCL=S$^@Rsb' );
define( 'NONCE_KEY',        'wpAdQ9|kQo$iLt@{Ffd`@<yIKd-)-Ff%Ef#G<$cc]+Z+:[EI3E&DF0T)*}ot4@%+' );
define( 'AUTH_SALT',        '<Sy_]>qZnX+mX[gvVW88Zaqcr<;hrVkO$~&HFZg]Nm&Xh%{JA5^cc6=00}&.l0PJ' );
define( 'SECURE_AUTH_SALT', '(F1Gu)<$@CvElWmyE:lc-(]/EH>:cy|^SAME0ek#,I4>yD}bVwAv^bZd!=%G_qk7' );
define( 'LOGGED_IN_SALT',   'r?za(U4OSX_~LmQz)*625mIJ&NK.)t}/PVS^~AG+y4K)b@AApYYL3[pY7Q~%NHNG' );
define( 'NONCE_SALT',       'v>1c^d:5HQok!@V#wseCrn&%A%tK5~:sdmBGb=NSSwSg4f=o(tF25$b(w~U,%N(X' );

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
