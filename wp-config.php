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
define( 'DB_NAME', 'aeris' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         'Kdbc^a[,!X6,y#<H+8T[LGKW^l|R/#6<ueH8U2aYuzH^^x/?$p|#[L9DE(v<y@Vn');
define('SECURE_AUTH_KEY',  '70fbB&B$x<$!k<W^JD_2V#QBT-?gx?bef$JbwRLLahDtj~W^xAy,c }5Uw#e|4iE');
define('LOGGED_IN_KEY',    's1ZZ!#`O`ktTROUZF7M#Rds` `T0#%<`ONY*U.V#Q0obHXN<Up~VZR--Ie8BombJ');
define('NONCE_KEY',        '<*MxPKt[=M<cKz;;@A{WJd&X-RnA|L|FF?0GpA7v*8n#23R`IKYn#8C81<I|cx.Z');
define('AUTH_SALT',        'piR<!^F}~FVwBQsTPI+ K?/xn9vbWrL-Z#@ V##(Np31MBv~{ L$p7~|.$WzCk`9');
define('SECURE_AUTH_SALT', 'bt?9ya|0A@Dd.j0$`q+`*Wq!c${ NLz{DGOZ!%6c8S%2,x$+` 5R5p.4_0<*0ru8');
define('LOGGED_IN_SALT',   'IYj,P0f9:Q?#onn<@dAsJyg?v; oD`rJ(jAN^ka &u%SN0$7cK j2F)8%[-(J^Pu');
define('NONCE_SALT',       '9`V-B}r{,Xmo!~Z6MJowf!eJie`aG2OSUbf$}|QDpe?qlcRE&+dyu8g>#Q(+bD;o');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
