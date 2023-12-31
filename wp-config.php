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
define( 'DB_NAME', 'amabank2023' );

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
define( 'AUTH_KEY',         '0Wb^+pl<gyp]ixLK#2z[y8%Wm83%u/N>{>(yn47XN`UZ?HO81Ia}rBI,Gu&~b<$7' );
define( 'SECURE_AUTH_KEY',  '0qg^T(1ow^Kx(r_fbDKr!^wp;;[!S[o-?,)TmN;jiOx?Q9R>S-_^smN#{+~dw00n' );
define( 'LOGGED_IN_KEY',    '2b,+L9X5NQmt}V=9gg9*=>Y(14#sqa]Zj7X_ X^&GTF)(~_Oz#OhN}J?%8=L?%Fi' );
define( 'NONCE_KEY',        ' 71g-bgkXe>wy^QC$vOc:TY8L5>E+yXh1#!Sb/u3wH5b6^![L<8th6gmGm*Z|IGZ' );
define( 'AUTH_SALT',        'U7b1gR:D9]i2]jaU+bj[i/gCUq%pO23DvGnR#FzK9x4uDFf|GA;>-:4{4HPKKj1&' );
define( 'SECURE_AUTH_SALT', '#RhtSv-|N9VoRvTBIo x4nn?o4v);6;)#)t_QPPK3MF.rh4`o_k.]vmw!l0ayaE-' );
define( 'LOGGED_IN_SALT',   '5z5QO9F<LLDu5CRDb~6i]r&4cJ*+#3/e.;MlBPj]y;6q|9_37?C-2EX<s{?Ngxvz' );
define( 'NONCE_SALT',       ']dC-47+ V=GpU7%9e4Lpt,[kxf[1=PfYyDx|2cOnHth`V:?tbn,x@`8bJT*HS7no' );

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
