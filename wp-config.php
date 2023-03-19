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
define( 'DB_NAME', 'i9252396_wp1' );

/** Database username */
define( 'DB_USER', 'i9252396_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'E.PRgzBnlJr0xNkbOnM54' );

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
define( 'AUTH_KEY',         '+xI =s1t6BzPB+#:K]rgUYl:I[qyk `aa8hg!Vyi@6:Kj%]FL1pJc?xZfK_]+}:!' );
define( 'SECURE_AUTH_KEY',  '9@aU(*Xi$Xv*`ndil8-={>4MJ&S]gVU:gx>SYa&<h%EnH~e9(2[qWd!_]nl84:,b' );
define( 'LOGGED_IN_KEY',    '@wQ8hE^C18*lbst[m:To;:|VQs]19U[}V={R_$QbBYguHv +1M+4CL!^[i-Z8xt>' );
define( 'NONCE_KEY',        '!4vKx*fVY)xjN%%f6LBOcpyyXwsbeHTs!~]Gr>o|>]HG}TN<QQAOd<jP%`F7AMBH' );
define( 'AUTH_SALT',        '1qOF&VN|7<X[_S0}9uNWLmFkXv@l}k}|$Pt`8yyQ-r6Ib3HoKL+(3sPU!9LnxkL ' );
define( 'SECURE_AUTH_SALT', '*2U2Mo&zdG|7 75E2m U#6~aL*opdyqvKp$X`ud2NI[KoKb^nI8jO!BV}l]mIV)I' );
define( 'LOGGED_IN_SALT',   '`5&pbt_a)v1CVU6-~ypc [dc?+n&3U%lNu{IR#?[i Bjl&owNQD%O&;!R4I:( wl' );
define( 'NONCE_SALT',       'zw=7WL2=!%^9dK&k:.g[e2S9_Fl&>>Zvj+V(9eKMWn2Bvds9&_(v]#o,-3=]&wB)' );

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
