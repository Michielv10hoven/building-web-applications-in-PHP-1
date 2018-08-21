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
define('DB_NAME', 'wp_course001');

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
define('AUTH_KEY',         '%uil<u`Q^d^z0ukh0/SC0ECl0^ajXPo!pE~]#c)BZYX!>1xXJm*+4`&wMt5F&N|/');
define('SECURE_AUTH_KEY',  'GL$_mr>w =QHkc<C#=+wWA*(7H#A]orOmT>7AgX,iQMz 5]0Uo3_v;fG8~ox^z.]');
define('LOGGED_IN_KEY',    'v{(Kf)qtQ|LJ$Wr/8J:[.svW)Q1mkOk_n Cy?Kz,a*D:0WUudc1+b5!ot=p+Sj{U');
define('NONCE_KEY',        'Agg!@L=,Nw&m)]Pu`_R1dVHL,N:dzq=5X0e+^_JR_#S//Owm5u],[SUw3%%&UD2X');
define('AUTH_SALT',        ']Ef^BO/bb75bEg?|!/1d]~NY@Nl2e~  1meLQbu0T$J[n(z|7eLl7a`t.sI7OWe^');
define('SECURE_AUTH_SALT', 'dU=Ia]d;^ws] Kjzt:-MjcRLY*lVNK?<h%0BWS|m}|ovdeSv)6M|{, 3Z?s`7~2.');
define('LOGGED_IN_SALT',   'V$$:j#aCb3EYFcwv+$.,tN>FGJ<|mSO<GfIHIv+s-wYI1iHN2u*@_ft#DW2x0,_/');
define('NONCE_SALT',       ' hsd8Jp&y:3u #!N}licp9w$1&U05`awX0?0/?dXp*0>o2v1^Z[4{oi2xpNg#eBN');

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
