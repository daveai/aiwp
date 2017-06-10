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
define('DB_NAME', 'ai');

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
define('AUTH_KEY',         '8`dmCKya:U=jv|gUEsdV{V%ut0{FzGRMy7&AA$:hVu%;Pif*Z-nHA,(PII!OI~e/');
define('SECURE_AUTH_KEY',  'MWU~d`(_9A}U6m J`5F u*K`u9;d?JV@w6dXB:qgq39+-&C+Mu^0TB>UccCi,cM/');
define('LOGGED_IN_KEY',    'H^w)@d!D2Kh3Q>@(AH3R0Kl5:l:$;ARb2?^o#gx)eqB!5W&NiU]H)$eGy3S([*e=');
define('NONCE_KEY',        'j&dUA+6`]R!DEZq^?eH2!J,zaW+Zzm NYD5V);m!E!#i@3J`[0RW-x2NWl6ll,-F');
define('AUTH_SALT',        'U$u=d4^68hG7Zodn,yihx3E`,j09[EHE`o,N#|jKZ!RD)Lj:bFmyTtvJ*_cJtuz,');
define('SECURE_AUTH_SALT', 'T2_1_siw[ll=_$Q`=s=-j2>_)6y&<V`QQVxS5d#@+x%RE|grC~7|i3Y!;k|H%W;g');
define('LOGGED_IN_SALT',   '0_1c;/nL!3Z5~k)bA)jw8rI>VC&zTqjH~EwETnXKB51(nY2?@wpx}<By6cQDRAK`');
define('NONCE_SALT',       'd-%t/_1o^nTyAEd+V|kb`,1 O1e[Jxj@aiMc*~.TdlD*!O4}8}Jq:)t1Mx>oM(c5');

define('WP_HTTP_BLOCK_EXTERNAL', false);
define( 'WP_MEMORY_LIMIT', '256M' );
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ai_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
