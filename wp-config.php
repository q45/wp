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
define('AUTH_KEY',         '^5]|j1TP+Z|EIq8e>[H]^l>~N%QTP5>$E-dCz8LfU5+lEp]?F.H1od>|-omjAA,z');
define('SECURE_AUTH_KEY',  't`+/ZR}Z+ewm=+`z$Xc1%u2L|V1MP336ue1q>ZY{{eMg/4lrSeol-((R[5 %5ea[');
define('LOGGED_IN_KEY',    'fUo3zvN{yywQlTZWC}z /5+]Bt&x.7iA`9}.|ah1QRbh)~V?oa^G}4$s{Ae&p<~i');
define('NONCE_KEY',        'dJ0l-!#(FoNv?(x-RcC7Q8rOu;=ax;ZJ9AaO?  NRP873VZ<y[d8/Wp>$+7?Xc[O');
define('AUTH_SALT',        'UHX(5oaiEpsitST<v|I](6 @,UAE/Y%jX.;+^4_aL+Zyc<fh|.|b3X]->m#Mmbg#');
define('SECURE_AUTH_SALT', 'n/Z^4[e$GCZCc6*s-v$cicO!o.y~Fms7&A@p7-|%JS3zohx7}rtRY/kw:fP/G|p_');
define('LOGGED_IN_SALT',   '$ .l|e8[/|rO@Dg7ug_X9U&@!<!)-`H#dC79d65vIAZGk}yO#aO}VQ.mzQ_y]@{`');
define('NONCE_SALT',       '5L^e)WjY +WMU.#%KNz`POa@Vzx0xl|r,;/8V6m%|*rr]M2LA;-$f)BiVzZ/=wex');

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
