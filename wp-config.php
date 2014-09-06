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
define('DB_NAME', 'zanlus_com');

/** MySQL database username */
define('DB_USER', 'zanluscom');

/** MySQL database password */
define('DB_PASSWORD', 'YMzNni9k');

/** MySQL hostname */
define('DB_HOST', 'mysql.zanlus.com');

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
define('AUTH_KEY',         'Qu/@H235Z0s_85`En+O@KX%f)x&ul?Hc@Y4Ma$4$2utzhpErMUQgP?JMI`sZ1h@?');
define('SECURE_AUTH_KEY',  'HM4DcR`&i|J_XA:mUM(Kh|_SYya!z+s*7"vV/QenOk+8xlATaFfqTRSoMjc;#TQH');
define('LOGGED_IN_KEY',    ')Lob9J$4c7t9ollt)LhLoiP9KyyxoT:K4*PP#uBw_T+@4%Q&o~uU8XSHftbm6xvQ');
define('NONCE_KEY',        'MVm7B~uAqUpy06$Ft^7#ZFq%GZ%qOpO`0Sy%;!?`D/It$Rw1oF:uKol$ez*_(vbX');
define('AUTH_SALT',        '`Avt3f5iZNNE/%5ahFbpMvuu13Y!/gP1NAGg0%(UE63Wn$N5uQrQ!hI3)b@*Sw#R');
define('SECURE_AUTH_SALT', '?B2%LUTdUK_"5d1IIaW4Z%LYU2TBg:Q)E&7Yeb+#sm5?+5_ExMnsg1a6X;rk3@oy');
define('LOGGED_IN_SALT',   '/S8Fd+@;&DV5mdsdIxZ1ku3oHQENg7MC2pIjrq$oY|jH^iAnHlsivWuEPMqGf^Kq');
define('NONCE_SALT',       'Ze7xtH!vg8z$G63a"w^+XYseHV`Plrbi/s?!i_|jbphcv9LT9mH^KF~*h|wqz^a4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_w9dq5h_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

