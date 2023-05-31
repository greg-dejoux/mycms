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
define( 'DB_NAME', 'greg-dejoux_wp_jcr8p' );

/** MySQL database username */
define( 'DB_USER', 'wp_t3tvn' );

/** MySQL database password */
define( 'DB_PASSWORD', '2riJkh!$V4Qm9_8h' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+Oa17]p;5TjMi01t9Bz0M+7R35J9U6Sdl3]ttN5z27psv2]w8Mt_Z78ed5Q6(zVg');
define('SECURE_AUTH_KEY', 'U~[8:4)T-qJg:X-p[Sd_kh51I9g&UTKxQc6tcf-43TCV2o!Lz10xTnB88Mx4-569');
define('LOGGED_IN_KEY', '0-jCqeB!rwly~5%O~mO_:D_9yubr609]01G668l*jn!2jQL1Of*[;:+*+Uw7f:E;');
define('NONCE_KEY', 'p#03_@DN3:758Jk9X|FF1z5a)wC/oHB_2m%m9FB-O(Lz[6bUl[93PoOt-@GV:57Q');
define('AUTH_SALT', '+&zf!5-oF)Q1a*g*_B|d6m08fho87P#w5:56|5G[:oCH/-100&8D-2|G]2~A063o');
define('SECURE_AUTH_SALT', '2l1+Uc#0Er1f)0/D&xp-+sly|Y5d6PhP2yzO++P7T;(W&*|vT:157muYN-a9x[qi');
define('LOGGED_IN_SALT', 'bV#XfH@@AESn5KKAe5cK2J3q[3jwSul&:+fNP%a~X:3DEzD3pAQ!H]+RifHn9RA2');
define('NONCE_SALT', '-2)[jA3ZGQEy;@K*g/QToRercku;j7]4V6bZ@*sFEq69y9%C5|Ek)&0@n+X8H3nM');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'li0eySYD_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
