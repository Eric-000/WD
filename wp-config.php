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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')4lju2WpQx$,=?AG=Eu$&,-Z}M/zRa[n,KGTl?=.Nok /n*gANUT0VF`[<lcj,BK' );
define( 'SECURE_AUTH_KEY',  'j3>nR8L?.7{i`x4Dn<pl56C56KrO 6lfka3!=7fK]eTlgu2p/$xv%u/9PO4e/ni7' );
define( 'LOGGED_IN_KEY',    '+%j+}a:[u%RHusF)1`PN+&Rhh-rP6M.99^@^UO4NPx1:VBN;</#Y(mD3d,X^9$$7' );
define( 'NONCE_KEY',        'jN.GmJXFZ|Pv5o9^uX@y/R)nr9#{28QW::XSmRPx93LAU0Fo7i$h !H*47fa{Zcs' );
define( 'AUTH_SALT',        '$,q0~mPY^,yva[YJW NG4k8L=aob4%5a-DL]]Q?(E)]?IfuGs5[#*E9Y0lk>a(yI' );
define( 'SECURE_AUTH_SALT', 'I[1!]*$oOJ,8fBxS5`Wk6+GsTPO&;T|~&5qS*=Ru)YA7^b5+ Y/~^K|ky:PPkv1[' );
define( 'LOGGED_IN_SALT',   '.k!{*uifC{nk P#j2RBZbj2,on ACp`^zR9wJM#|W.@[8iU=>TPMB:9kU)~F0URS' );
define( 'NONCE_SALT',       ')XOb-L5)LU@Soto,M}>G,H)HrklZA-GrHjFbUFHX3%jR0$4 l~>@!sa}[WeiSS8v' );

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
