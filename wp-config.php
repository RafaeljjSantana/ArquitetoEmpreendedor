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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bNe!J0YD5Nn1;o2412!1NrXq5>sX]mk)t#xjYq?~J)ZPiD)9Rq +Y+~su4^uB54Q' );
define( 'SECURE_AUTH_KEY',   '<*^SLiG>k3s1d`_0/jNcI$]k; J%tw<J<$E5K+M>+YGeTeUsdt[Y1G-8p+ C<4A@' );
define( 'LOGGED_IN_KEY',     '6L4C%,cWtH`T1_H!0Veri3(>Z I-ZNWDG579lEV-:v{N)ip[!S=Iy(?Q5F6n,$]I' );
define( 'NONCE_KEY',         'fPpZM4]zXfXs.VL;+iCfF?7m2*yUkyH<a@RC 3!4f#|fR=0dom#R^PJ|&4()^a}3' );
define( 'AUTH_SALT',         'tId`DcAb#6ff,HJ_Dn.ktb/%7-y:P7rSU6.@3a(U)o?N3oO8+=Tw[?7k65a+awg ' );
define( 'SECURE_AUTH_SALT',  '?z_UlcG7DgN$h,]pkrZZuI&{/h[>ar<q3Vc ]g ?~sL6K5=UcTvrJhy3n%vv<Q0j' );
define( 'LOGGED_IN_SALT',    'j.npRJWAq+P(Ix)h&22wp]BT?{nvWp]8o{3]gY;QsRa+d[bnH[An!ivGc{Q,ZXsZ' );
define( 'NONCE_SALT',        'i9u3)<=Kl[##nxI>b990mjE`D<KQFL1c[9(JAHe)qV*wF;|;u]|wx7nYOLK.o?nj' );
define( 'WP_CACHE_KEY_SALT', '?P~;V_av+HE/<_j:O<(<uPCwjYRtXcsz1sPHpFs1d$ml}TIr(n{g2.5*@RNv(@Sf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
