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
define( 'DB_NAME', 'horenso' );

/** Database username */
define( 'DB_USER', 'adminhorenso' );

/** Database password */
define( 'DB_PASSWORD', 'adminhorenso123' );

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
define( 'AUTH_KEY',         'IM(gcp&WS.OJv7apx/d#G+nc{bJ*e>NDA 1QG&.a Me!zy^tHI/`.vsk3PKtu&9.' );
define( 'SECURE_AUTH_KEY',  '-gr9ulLSb+I+X,3/Q,$8lyKAFrgaLqvG*p0 iB_5tnzTMjfQl^ Wri|mu{6_tAR9' );
define( 'LOGGED_IN_KEY',    'reWwu#X?qi^+#M9medk[^Q-P5:n:Qdt$^P)e$*Ow:-HukBCa9;] l=G[@Oh13>~f' );
define( 'NONCE_KEY',        'M`~[AZ{L :k1!Ff)S!z%u0_<EI$%9Q!{<law2oY)$E$[vsFF<$T/EAf[fV#rOR)[' );
define( 'AUTH_SALT',        'SK|jQXIfV*kE#[2| qcjio~b)n0[XLkB^Lf-22#*!y[3gS{xE7h80?Z82/+SZ#?P' );
define( 'SECURE_AUTH_SALT', '.O4d_Pw*E~|aUN-u/xgVUb _duu5DQraG]bTG86kjy`Id]S%C5siuZ+G`cyw9=fx' );
define( 'LOGGED_IN_SALT',   'j1g$3V8xr :Gs4BK*0]`W6/ZQl1M<+>[EY6JnT*EPi5N*p=a0_zdY:lqicCJg3=0' );
define( 'NONCE_SALT',       '}.]y6,?:d=Hfl(HS`6f{<gW,@*qEPoE;/?M6GrXcA}e?Btu1K;2Le2S>shh=_:DF' );

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
