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
define('DB_NAME', 'wp_lmp');

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
define('AUTH_KEY',         '5f6~O:3@LhlaDq<Le%<^]+X3t0*XsWL/m8A<rg$%utgeEZ1eA+*Le^H01N7@T)p*');
define('SECURE_AUTH_KEY',  'Y*-;sY0,:ehmuoT_<r<B;.L^c.-$jx% Ue<J;Z;q7*&>9&oll3wqymLSM:;i6`=e');
define('LOGGED_IN_KEY',    'jbriHK#fPhos18=4m >KsC#,6od!FC<2y}cz5l&j@{.AN7do gfVX5j&%`Ri:adI');
define('NONCE_KEY',        '1i(KV$k`;;l%]*&<&?q]9u@V`L>uLVT4&Z@Jg4[dm|=3>F HRL)P17Fs8!;Kz@YQ');
define('AUTH_SALT',        'I}o*R&yqgsXuI*Dylpr0=j0PRbbk Ke1f:95}6ov@OoT)AQi9$>n&=)k;qjS+nD<');
define('SECURE_AUTH_SALT', 'H9CAS/cio{O|s..QHqU*Gr-<B%V}k]@+%r9<ciP>i}IYm/1/Y#FDB6W0X`03Wi.H');
define('LOGGED_IN_SALT',   '<Gwz]1*[Z[u/)6MR!I=FKe8>pu>KJ0n@::So-#SB|Fwr3 TIY%{0]E3?Vs!,6E>v');
define('NONCE_SALT',       'D{oV@tb:2cKypkF;cSc<-KKrNB7V/MY(Ejb?*{yCh$e7$~/pHzJu}3HmH- @cLBg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lmp_';

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
