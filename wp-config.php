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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ghforwordpress_db' );

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
define( 'AUTH_KEY',         '{b6Wja6 8x2K2>~WK.4~Fz)V$ytE8_sul0T|.X_8Kc}T |%?^hq9p^L@caJhJCFc' );
define( 'SECURE_AUTH_KEY',  ';~.|[P0~hHHL^)rYG/AXvH ]~z^;HoRq?Chn)V$9fmc<2E=:g]pX4#Jg|Rsao]?0' );
define( 'LOGGED_IN_KEY',    '%=hBYMmDK!2^8R*rNL7~=z~hB!jII,=^&v;j:?Wz+VZJ:2rVW:Wm/+V1~j6M7Xiw' );
define( 'NONCE_KEY',        'rHd;<L,$u(_b4:^P*Skq=`V(D:8@.oQ#j?le*r.!90_l-zKzgiVGkwv^p8Ps^Wgj' );
define( 'AUTH_SALT',        'P(E]#Ak:<SFhi6FvB7X}TnB2jf@.*_)LJ9|iJ7H]tVJu.lY{_aDMUo_:OOfPqu[C' );
define( 'SECURE_AUTH_SALT', 'H^qSOc!c(`-int64aFzlV7c<YXq&o h}{+Yo|oQ&zgXGmfGsM~P}-#lt<zgsT*kF' );
define( 'LOGGED_IN_SALT',   'a}Y[BE/;i(k>q9isZWvh?2U]Tyl2H^,-so][7Y%akDE7w[Y8nB(76H70Hq2rRU}j' );
define( 'NONCE_SALT',       'E{H}?Ol6!xw;PQ}uWR4|Kp^vhicCk*g4$:N9:8wX>kr,Rb;~wTFS}hek*PsSFKs`' );

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
