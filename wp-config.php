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
define('DB_NAME', 'act_23');

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
define('AUTH_KEY',         'L<>u8a~KkWP>lF(~bA/<VX9C<E8*LC#o7|0uFKJQsbvdvOo!:}*N~~q)a-Um;c=d');
define('SECURE_AUTH_KEY',  '?:X[w`4.:*G![43Zn|r1&qqxrpfT||fpGrP,7,M5bR>Xk(3Mr}mM#cchyty1hE.>');
define('LOGGED_IN_KEY',    'LrpZb0N.ZkcP AmrAPB(=rk))_tkj.{XsgH+^Rm/#f8%Xp+Pui!@t*U!E.d2f}Ma');
define('NONCE_KEY',        'SPkB^lg_MA=E1!S:Mnd%8^B5htzvq0/6@I-IU#Iv4? RcQ-<<R.hh2xsFS 40}MG');
define('AUTH_SALT',        'ow&5vH|&@aIF@6uj- S/H,f8KWHiYub-0U0%u538SBrSn3.bu4E6,!$~{EBo. qg');
define('SECURE_AUTH_SALT', '?^ZA@B=0u7)s>yO!+DC]C+4zM`(EOM!n!q1QEoYpn?;SI!}..K`D47$!N`t6[T^^');
define('LOGGED_IN_SALT',   'vWOg8LYb^y1}`|2q?QC<:xz5f[-F:(SrYzfYPQ3[<:b?Ju[T@=7<MER+O{A>YzLG');
define('NONCE_SALT',       'zp05_e^^4$/2J>*9R}4irplAO6Rf#cac;T.f:&TzdGvqw{a:?0GiX1oEzYNkHV_:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sw_';

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
