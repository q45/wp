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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7lgD91&J[Wf#UNnrK|z|HX._?+$:^]XB,y_dF_kQ1`IB+a|sC;w[s7P2SZA-:c;(');
define('SECURE_AUTH_KEY',  '^?jbe6y?!LV}L;+z^Q~ynCLKFUc#I|YvjSF;-}O2Pz;UbqD~iz84dV4ezE+QyH5p');
define('LOGGED_IN_KEY',    'Z-eNVOQt]SvH$~i,ZP|om|mpW&e2NDHr5]uQ/mFh6Nj&tAM-{pVQShD9I&2D]c#L');
define('NONCE_KEY',        'f3+5)pT&ncy=::q+ty._AC_bV&UFL&^IDm#Tox.MMkgP6~uVBS|N4!z3!/P8-}DH');
define('AUTH_SALT',        '_~K&*!<rYL%1d43~p{doO5>N0KAP<uGG:UH 0*tR?(ayV4;,rrO{;Gx2bK-f*H3!');
define('SECURE_AUTH_SALT', '13-gcT7F!0ro#7+wY{LTU X5+X<tAVkQD(AUc`bFB1ot*K|F9]|PH1.?*S!!Dp0F');
define('LOGGED_IN_SALT',   'AR#a{hx3E+IOV)2Ywu;OtE{1_@Ma*UW6*qmx%d6F^:<O>rL)x*-?aP|=a{)~|[s4');
define('NONCE_SALT',       'DcDazDrZB lu1&^u|{R7D R}4`r+UxI;qOR&L/[f[+UTRfi~|k]wpzsu[ISSB*9`');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');