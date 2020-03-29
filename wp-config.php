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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         'A7rqI|@mq-Tw>>>O^B@:3B>9c|ZPYx9Xk5lV!?ITlGD=]1K]|6~u~0VHEoynAOJI' );
define( 'SECURE_AUTH_KEY',  '7x g3)au_NQgA5$ZpT#k_PWLJRYrs?UAJO{e+twtw<hi*g#t-7TG}.3C!RbTnYpp' );
define( 'LOGGED_IN_KEY',    '0gX?e5M+ b02S`y2L`rlcNa*y}t6+6U>b!Ul.(<7z1?w_;Ss,X|]4KY:]l+;&Gw0' );
define( 'NONCE_KEY',        'ZN3: }<tv#| {)cFYEHgP}I%rf}S%]ut-Z**3Y>CmhTi>>y|7Y#DVjZ[KI?=WOJi' );
define( 'AUTH_SALT',        'qqBS<C|O7_nHe pIf^yX)`w^rEJ${$w6AHD?.HZj^S2ygcs1z,jT*GnUP_(7!^ge' );
define( 'SECURE_AUTH_SALT', ']rs&s*Ts#lbr?Z<TMQ$VZ>IY%h~fb[?Qib+o{i7!q.pb+asv%b-trP{BN.NG5+e(' );
define( 'LOGGED_IN_SALT',   'atCmt>J6/yT;3{gcD8Ou),0C$/tQa=]}ltxi &.T>{rZAv9[w<&jC]`f9;;3`EIf' );
define( 'NONCE_SALT',       'Mmo)QM,yY.{Eig~A%lx`p+Argl`HAx,$:].6Q.Y1BDAs6QIRpOZoJJrgski/Gb{>' );

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
