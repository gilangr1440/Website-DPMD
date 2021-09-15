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
define( 'DB_NAME', 'proyek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D/0vnTF4zF8C9;%pAf{q;BCK{|F-4wIhK~2vq}y{3e6l<hpGlr=rC>R0t7(iuD(S' );
define( 'SECURE_AUTH_KEY',  'd]{25~4oaQ+$(/4.x^q}DP9&n(m(qWWC(v1L[yXsLoyYZg{Y|u2y7~hRr%QU5=ax' );
define( 'LOGGED_IN_KEY',    'nmuVPH$a=(l-AddSPTQ.]8_/[]1t2KffL(InA4q@r(p$@_=^iAL$q!2 koUh*~^P' );
define( 'NONCE_KEY',        '1tNf{B%brpQ(#zq[XJchDmj%Ge</<Or!jB t,w|0_<I *u_YG-<=.S+JLyy]N|O^' );
define( 'AUTH_SALT',        '6lqw{||~D:?0A$!g`N?W{nYG3e/rI0eZ*McOgU^A{w$yois~Dr.Fi*{-JGD0sMbq' );
define( 'SECURE_AUTH_SALT', 'wmVy=y&dJ*]B7h8:G3N5cM>XqL%=3CFTyXfL= $ wHGfM~u/%4;.x>A7aT?:kKhg' );
define( 'LOGGED_IN_SALT',   'A+{zvW@>2vYwUQZ6;s[bsb<I6-0JDk8!lC#JNd+/O?LH$W#Q&H?;b>dl}URX:.#S' );
define( 'NONCE_SALT',       'x(c<6F`0hs5N|[9=.;T?<k$P:)UN+;p{R1Om542ESmGn&zjEv8Sge_.cjWY|HDn ' );

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
