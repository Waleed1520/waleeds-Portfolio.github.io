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
define( 'DB_NAME', 'divi' );

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
define( 'AUTH_KEY',         'mJG/Yy*sveC&KEv;EH6,bEWtz IK6@MC]$0aK2t#A}all#$[+bbdW&0-U/c;u6GG' );
define( 'SECURE_AUTH_KEY',  'K!4cG>Jaz|Q8>XD_yE{{vc4UK.F=U:y~chGwn.>zQ@Zuv?V_4 bh3*0i/$Ly`<S_' );
define( 'LOGGED_IN_KEY',    '&7BHz,=I*a{(eMpzm;NqOD@X{#Lxtd8Ir;dJ+`6rEd&lgPd7(!G{Id9X0csPhpn%' );
define( 'NONCE_KEY',        'l]ShK+Zef`s[rdn8.fNTKsFCl+C%?;oUvsTfiHd@N]~)~@3[luks@qI5uTD]K]( ' );
define( 'AUTH_SALT',        'SEY.Y`:q0u2R O9%v~ha-O#@<dXD`10cctSyf;bOB={/6O]! gn#~+JJeg;peT*o' );
define( 'SECURE_AUTH_SALT', 'z`y$B$z{wH/{Mp.b.eEq4P,Eu46)?Sxk#!w5!^YU}}k>$qWC1#9ptw}wB+)_tyDg' );
define( 'LOGGED_IN_SALT',   'PU*C[m[C_)<4`D_von@M.w1NkU>C3[.{|[KDx]2GCNJrD,Y{M98rW%p=NZO[7@9V' );
define( 'NONCE_SALT',       'z`ssB@nrsL)nv^yCKb|A/tFukO%(C*sIH{p8>i|W)uXO~a3WFKl4lq3z|;E$ 1vd' );

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
