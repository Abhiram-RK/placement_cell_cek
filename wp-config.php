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
define( 'DB_NAME', 'placements' );

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
define( 'AUTH_KEY',         '4j&}QM!rSW!Cfpp<YGiokP;5 .URpVG5P*eYGDGfN~?:G][03qksBmTJ.a1.A!3?' );
define( 'SECURE_AUTH_KEY',  'l2VTyC65sxF@FV8# 6kO=G0Z.riq??<f+PnyH[1aM5LN$rw_I{D:wMjx Hg*Oi(2' );
define( 'LOGGED_IN_KEY',    '-EMa[FVbRo=.FG#*8hG@sXji9~C(C%rK&PnZI>C6cg))MQle#>UH]xd0DqKV|vU-' );
define( 'NONCE_KEY',        'L:&uR_vP]0$1@5@o>wx@vJS<ih.vE,{2<HvcbP]W,7hO1%T%W*amfm#.IZUGL0? ' );
define( 'AUTH_SALT',        'S I/g-VuRaGr1)^Z&GbG6x8TPh(tN]JMX;vC!BP[79ytO/ij/!;v]Ub6&}I?`R$`' );
define( 'SECURE_AUTH_SALT', '-eeto`Yz.x7c~0Do]!6MRd`y7yte|s[sKOl|jXXKOw0hGlF~rDMY[_dtyAE|Com4' );
define( 'LOGGED_IN_SALT',   '17NNk?uEQ;_p1wzHdG|DIkQRd^fg})LW{x*A^S;]|Tz{1,}r+r6@3K7u9#7AIpL$' );
define( 'NONCE_SALT',       'YU9gQWLkCd0rVKm<RH01BMXkQWhZx`>:#YZsA)? yAUoL,pF)-L%Zf!!oUs8a!:_' );

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
