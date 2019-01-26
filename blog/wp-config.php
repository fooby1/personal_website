<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'borderli_joelstephenson');

/** MySQL database username */
define('DB_USER', 'borderli_joel');

/** MySQL database password */
define('DB_PASSWORD', 'Freeyourtunesgear:4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qRW3L}N06--=U+$}{y9-X`DE@rI0[!-+k?*{3jH`|JM0b1|*a=UxYd)c/jC6bt58');
define('SECURE_AUTH_KEY',  '(*IV8 Z^J|3E-6Xr(.@6D>L@)R$x+FDl~Z~3qVOpn$@-PrA*B]7^`$=@5~U>!n2/');
define('LOGGED_IN_KEY',    'gXmsUG+Pxm1[@TuX|9A+[$-x:1[)8Zr*YTwZFTcw}H~15g!$i-iw>}+dqxzxV3+`');
define('NONCE_KEY',        'u=Ju4}[%(weYQ}^<|~ygeM^~Vb8j<<3&8rQsx|R-.*}6l maV(}XF:p7(IE8@-&T');
define('AUTH_SALT',        '%P&So;5rB3*:daAqHCiIxWU,/SoW+s<N:tyq8=GF^YObejtb}h6vxPQnO0GJNx]|');
define('SECURE_AUTH_SALT', '+fsHJ3Dkgvu]}Q7$H0?{Aj!QMQIDzJy|Y25+<HhDe&;1(lXLCLKnphltz7l+fvTo');
define('LOGGED_IN_SALT',   ')B2D-kElR0<W/@g|lSEG::(GAyY[P!cNslV6pG|b0Tx}kwW4l)(j|OD|4,J<;wM-');
define('NONCE_SALT',       'V=:&ESrG{X(Py`1FSf?KJA6Jj/rZz45!-D:iv^fzE*yz=|~`,V|+2waf2Rw [v(9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
