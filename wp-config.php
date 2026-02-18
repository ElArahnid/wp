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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_adzhna' );

/** Database username */
define( 'DB_USER', 'wp-adzhna-adm' );

/** Database password */
define( 'DB_PASSWORD', 'uV8aB5tP6h' );

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
define( 'AUTH_KEY',         '=V{@;Ry3$y`}R5SiOuxo<A3u_|4]m>]LDl=O[w# R?zwqco/rB9X+;TL+6<:*S7O' );
define( 'SECURE_AUTH_KEY',  'YsR@.]gk)14r4vq,AI`q(6c;l#}c*O!:AUN-&julCVO{+ww~I@Jv52zhC=ul7fA1' );
define( 'LOGGED_IN_KEY',    'gsT+8<m[(Z3x6jYayg{Zj{HX[<:=E0WAEG@B4XW_wE?+s3.b9>`GiE*?]qL:(Q2}' );
define( 'NONCE_KEY',        'pZHVK(XE]b?5X$r:l^(1sZ#&F<$=>;LI)82-%KO|=>&/Ko}cC]`|bYkoFi<JE>18' );
define( 'AUTH_SALT',        '3|f:hCTbN|LO-W7fSh/7G PTFa9-7B rVHcfrr4.-j+|qMa^WJe`Iux@e*w${ki2' );
define( 'SECURE_AUTH_SALT', 'U-S(}&SYw]zV8pL*(=3F=5|d4HC,OYnP_2N^Undv$}J|vPDHr}rfw`^G +6C.x8,' );
define( 'LOGGED_IN_SALT',   'kgfHT?*(eoGTOp?+(zS@?sD^wxG#O7ZbmLP$c30gk2Fu:kC)/#B%NOB=q/!c^L]}' );
define( 'NONCE_SALT',       '0!o{VwZ:))UFuB*CFqGQIP-$]h8{mQ<{]O=w-,^f p seAz.|TTy5x~OM6gUXN71' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
