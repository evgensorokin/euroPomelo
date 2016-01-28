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
define('DB_NAME', 'evgen_euroPomelo');

/** MySQL database username */
define('DB_USER', 'evgen');

/** MySQL database password */
define('DB_PASSWORD', 'mysql93evgen');

/** MySQL hostname */
define('DB_HOST', 'dev.ergonized.com');

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
define('AUTH_KEY',         '.U|ak%cCQEL#U*C7p[e@_G}CuUuc2j529oaKy5w`c:hNVEmQbm. iqb8-Z&]eu6K');
define('SECURE_AUTH_KEY',  ']QTUmW#8-D;I.e|#h(zm|[0-x+z7AD3|V*y<+P|,5GCPw@tm+1$cdj%`X$}>3f.0');
define('LOGGED_IN_KEY',    'F(J%XI7<jH8};S}w50>Jp/M ws6_68(b+[Tm*m*<o<<<&uQKCra_}HB)zF3AI/Su');
define('NONCE_KEY',        '/azV;w+$18ch}B>%#{tZX6RO!=!-.]Of;ZUDL|rRjh86c>vcV,zC|M~JpLQsw]9R');
define('AUTH_SALT',        '&BKBXWf+.5J]S|*GWA:z??zzlU#uz2K{S!_P4MDLf#3Mfw>,vx-AAWhiX(c<v7{]');
define('SECURE_AUTH_SALT', 'ev3UmW4jD8~cr7QF[dL pAH$#$L>Z)5Wp>VKI-m|(abG-/fqiF*VAk^m`tedt0hm');
define('LOGGED_IN_SALT',   'HBaY#_@|XyA<(O7$?3-jEN~xzX-:Bd P_0!sIDE4G+-FRO.f`I}$YH*lQ,NxG9JG');
define('NONCE_SALT',       'W=|<70+Xod@li9Ba_c+Ed]? kHm{rpJ:!=-2YB%N.vBFw$/8B/w,R+GOf#c24M2{');

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
