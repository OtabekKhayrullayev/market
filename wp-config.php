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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'market' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gFu{Q,{Jk>psD^RgymC`A%iBx($SD]sK1tkN(4*zbFt+],uB1U$Z+_`P%_n1hJ/Z' );
define( 'SECURE_AUTH_KEY',  '8zfJLJUz!E?J+Dqu*p%5diq7<[R9kpAN`|n}m|ZZW^7uq4Zd=(Mpso>Y8SF{2M5r' );
define( 'LOGGED_IN_KEY',    '>kP/*M0R;X0z0i>:Z{0Q.y%3szRG&!I^_JmX9AtSN)>}eabOxIk9YYOs9(HKScD@' );
define( 'NONCE_KEY',        '(k3=sGTbXWIEa<tby7^Sjkh9;TdbN#C$`$]@(oZ}NqO[,ctX=+e<fad1WN9+h.~e' );
define( 'AUTH_SALT',        '.94$sh&<;&xD(<I@4)XKF688L-&BiUK~h38ib;AVje~O+_Kfl9Dr/oL^J33?j^}f' );
define( 'SECURE_AUTH_SALT', ';5,<H;BZp@B,7{B:78o``%nRO>Yb8GE^w8F~q85^+B/kLL;P(V+SMk >q5GxVp-F' );
define( 'LOGGED_IN_SALT',   'gG@P9f>g-@+h;7:5gg,rp~Iw`p#3k5w-oZ~[b4cwI#{2SB/ht8joz>;Jgk2W^35?' );
define( 'NONCE_SALT',       '$WY?$^l[WU92u4E /BV1;J1_ {>]axW1V/tk.+3ZSA{em]N9xUNcSzl&9Yfft-d[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
