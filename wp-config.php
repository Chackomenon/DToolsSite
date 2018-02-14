<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devtoolsforfall17site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(M&LOZbM}`I|O3<U[.>xgp=7`L, IycwjG&4GWS)ejGG8mO?N_rkVFgz2%df$?K*');
define('SECURE_AUTH_KEY',  'y=p?}$KFO6cy-;IJb)}D::w&zO+ncv,#e|iQ9[FkN*U3v& )6+Gtf%C6qI~9R.Fg');
define('LOGGED_IN_KEY',    '`TVMS-Ssm,,s2I>4;<QMjp 69]FTE}+6,G(PiR7ZTX7%#3qI(~Nqm{29&~|-AN {');
define('NONCE_KEY',        'k4/czAHiviVN|IM+.5 /<|LvXm*h/@afFSc75)*kAUY(,0q(%M83*&g}sQ:W@jaO');
define('AUTH_SALT',        'Pn[4@q)%lEz.?K>D0j cbQXhLt;Wtw1/rB8pEL/GH&&PcbfZ(?EJ&h2(V)!3e4ma');
define('SECURE_AUTH_SALT', '=/?5i7UWU<jS~?_|e<=na!CNJ.a:k3u{=6G1%CZ:3;e[M?Qk{+3^aAZc;@18g-=)');
define('LOGGED_IN_SALT',   'Ob:RKb.BrG<`u?i.{:Rh^CCaR^sbf`F,f]QJX]Hgr7z#Sm$Cd}GfhPD2o72XZy:i');
define('NONCE_SALT',       'Ezc`94_AoPw!-/VBM[r6=9 b>OWhe?^OH4GN0s $U:1xedWSI8K_y5gg.)_V.&]D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
