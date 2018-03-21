<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'fatpigsignals');

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
define('AUTH_KEY',         '|.xai=5^;(ZA:T+_{~nu I=Q$nfH}^Q]&f}6m.^L96`kkr~bt35]!%tqCbe&MoTX');
define('SECURE_AUTH_KEY',  'F/BMd2B4Ks!7 LH6#l09ezniaHgu)thnkHg5FSuvXRATW r,Ld~R1woQnZrk6Ht(');
define('LOGGED_IN_KEY',    '|Qy#pvm5jk_aU6$q6:o`_v %,r6_:d-e6ysy<2Fk/1amuO]%@{A2!UQ{L/OR||ob');
define('NONCE_KEY',        'c=Nw9^ksw1s%#!/olfPC^Us>4lB%2*[1*{FjP!d,Qx13Z:~(05ua4}9j.(+3:#(8');
define('AUTH_SALT',        'bfyw.Lm(t1OEEw#~BT=5n/f/n C>[ULaFKlTMfI{P-7d[B)z:YQ#tU-&B2ALQPp$');
define('SECURE_AUTH_SALT', '4 KV.7(yUuf >=kPZNp7vTjs75<a[KuE,#?hro@LE9NCGRF^/|[>6_O7|l7^E=iz');
define('LOGGED_IN_SALT',   'S+f!R1q&~&]]m^$$qyS=yC[uKZrj9ENSr}c>hqIF-E?Y{+0G+a?]Rb#*{liz+LKk');
define('NONCE_SALT',       '`*wW<7l1*v(4vvN|,h$K?._2l7]/CwNZ`U&J9ga@u4NIP~L |tD[Lixy#Z.Gq-!E');

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

define('VP_ENVIRONMENT', 'KLoNe');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
