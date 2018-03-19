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
define('DB_NAME', 'kortbeek_lsd');

/** MySQL database username */
define('DB_USER', 'kortbeek_lsd');

/** MySQL database password */
define('DB_PASSWORD', 'G3tTr1pp1nB8ll5!£');

/** MySQL hostname */
define('DB_HOST', '91.208.99.2:1197');

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
define('AUTH_KEY',         '0>^zvOKN+FOxI?)F>~9yHN1Rff~Wq-?.5aRnK.{.=j0iQi#EC!OG>gfFYw,%JI*7');
define('SECURE_AUTH_KEY',  'i6A-t$[Tj{ts[`LpWeg<CI^8pbmHsgf5(|tBh.aw$bG#yR~6^VC>YrnYa)HSdqi6');
define('LOGGED_IN_KEY',    '@`{RK?VKlvIeOI)cW|^yUcP?Z~gvsPzW-s+MZ?V9BLSdDM..rk4P;zpjdCFh?#*3');
define('NONCE_KEY',        'w3-Ax(_ZeC{!3>e$z(.oTdQ1JZ7<`sgb%N^0)X_C0n@8$nLFC$i>ul9<L iw^)]x');
define('AUTH_SALT',        '%;;*v,q~`QpZ!YPcZg<`#C/+BFCxT3e+P;Kw~_+P;U}2?[,RC?jhI-I+w,WC/jn{');
define('SECURE_AUTH_SALT', 'u+l9QdMq1}dK-O[&Jz]*o`w!5>HMguoE8DZKCO`sjaEu6 *f9fR@6~> v@}3LS1r');
define('LOGGED_IN_SALT',   'kH6es,i2~]c[_i!m07t:C}Le. >gk@#!Dyq%C)b)hR8B,NCW/5c IDjPZP.a.wtV');
define('NONCE_SALT',       'kw#U2<brS%wfw:<HODDeU`J)`i(Sg^cbP$q!-6ogQ{}An~[8:3ioA<1Nt@B/qXc-');

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
