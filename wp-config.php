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
define('DB_NAME', 'riplblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{x0dm)lW8%m+3V|rM.YPQ72R4`X6-5pHB qfwY v?`Uv3%J,9yM`<qWebc`C=J0m');
define('SECURE_AUTH_KEY',  '33A&EZ&#A*SWBq@*f8%1D__SD,)@7l[CIEbq=(0MTN[ku2n|%0yfpEOTj$AZG-V%');
define('LOGGED_IN_KEY',    '_pR0*Z7WUe7W_zW4^ L<~qrja?wyoxT1>[xv@G+C^9!1Hgq)wFY{=y+:?RB>J75G');
define('NONCE_KEY',        '1}-msCsXLhQ{-*_L_k5s==%6&m?-cf uUj-0tL.<a#VdmiRk&8BK+&AHx2B<=]0m');
define('AUTH_SALT',        '92mO44>P1 y>n_]L?%w2AYi*<bMX =35bOMB{VJWqpj/toYVmLglTCGL!31FU//|');
define('SECURE_AUTH_SALT', 'eJ83JwI!Ji.wxKU;{%S3og;t+PDpvvQHXm}IK;tf@5KZqm^<6{Wg{de^u##y4)uT');
define('LOGGED_IN_SALT',   'uG#;B|LGXKsaoLi*bUZ4$ayU6>Ame}:gZh?fRn)-GAQ?U90J.@gow-MeJJY OqvI');
define('NONCE_SALT',       'N=xQi 3CP=rUX|!?H];<gjfh #^XV0cU&k]RhK3&htk?U~jw, 0Qy+{zv[ea@Iq$');

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
