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
define('DB_NAME', 'born-2017');

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
define('AUTH_KEY',         'Oh2y>~BQOn1`|V<>[_O((zlCk^;O;41?1ts&VrMb.}2pgoBSkzp 3](YETz]]CM-');
define('SECURE_AUTH_KEY',  'bPT:R9q)r[ !ef(x|e69D1s20)SPVXG*Szydt)Bi#d#uV^HQvEm$BnrU)cR9cR0:');
define('LOGGED_IN_KEY',    'sNUEOIEc!8rNpL,uO:o3frqw#NWZmrwwX!70o7eqeHI4!Ji=4#C/[L]~G>`]@XYe');
define('NONCE_KEY',        'jOvAKx70OHGR)7!fzOt>SAP?NES4P[R0()8bics!$YC{>AM&wnnNXcrw=%v L)?f');
define('AUTH_SALT',        '/R4g+?S|Gc^&f1+cw}UQ+Sgeh5 xTz[3IH/^;@#4.BMWu r^+*t6$8<`f;.1U%sW');
define('SECURE_AUTH_SALT', 'jv:!y`Z/C>UNd6XiD=S0ib$W>Tbq.?Y`ta6T]<CN*m1R&K1K`>oe/w2#j*P?5;i[');
define('LOGGED_IN_SALT',   '@eS?CsSJ_M;[tZgx~KT2wYPg|g9f?kjXP?]*/!6m1q@{R`]J~95*PlwOt*$>72g~');
define('NONCE_SALT',       'XWpjKjr-P&|?6tnS7s_<* S_t*<w8(V reO.)9$aT}z9#=;vwo_u=*aRMKdk^nn7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
