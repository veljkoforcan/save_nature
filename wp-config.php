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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '_hscJQ{jy8#}1[=3*X/}^l<POOkJXL?wq? xq,m,$3ErnC*L]Bx/Tkvs7(v lkav');
define('SECURE_AUTH_KEY',  'TD)KJ,~Yt_C+gq< :XA,0Vzg$.i6DzJr4hAFqTQ!N`f%,:(jnaPt6ZWR7LwBI|I8');
define('LOGGED_IN_KEY',    'e_%;-0{_r?9<rZ0ty&{=; J[k3#a6@FNWwQ%pAVy&jk4`g<W]&.s4@lLu<e51WZ:');
define('NONCE_KEY',        'Y{W}LZ)-qfAoRxx@(w,@~3u>*GTT1O^zc<D4-j$[~/pL1QIzt)R_4S,4qK1E,!l@');
define('AUTH_SALT',        'cm#QNEGH|@<.hR}0PT}3=(:icRjp2.Es%4XWotGB8Xr)yWWum]j,8m7lcvlzoBt,');
define('SECURE_AUTH_SALT', 'j$&@+_tAT_Z aN]Ip4;T! eU;8!/kAd>o }n!z]?]*OqF6JA/_]~$;u3GItFN)Dm');
define('LOGGED_IN_SALT',   '-6B(al[[S;jIr:3X@Xl$gmi|a+$ItRdD[R}a x?r9qy+[?&lKdrz#yQEcKn(NT(*');
define('NONCE_SALT',       'Hu-jEueF(H^SUS.TZm]Y?>R?,0(Qeby<767)HdZbfta^;;c:s%7:w2JjEYk.@P?r');

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
