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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         ' R.S>/zal6zv,usNNTdQ+A(r,E4y$R_poLL-<3iC|UGj[k;CM^B9O!<+DCrB+<fr');
define('SECURE_AUTH_KEY',  '.3{/D8,QWN|EQ[PsJn8!g_v1tCi46(G~?p3KgX..:1^MNFNI!<fF[:@n4D&D{`4+');
define('LOGGED_IN_KEY',    'o2vq_E<KfIu;@fQ#{d]D${/U?A 6^D}Xw4;:abu*{d xkU{pW^|ea!fpydZEqP0L');
define('NONCE_KEY',        'ri/YD<1N#mSzDxC-m4)T6MQY_qZ.3I{ynv&2IJxIUI|ZhEb$nC}`Jik%&?XiOc ,');
define('AUTH_SALT',        '34:sR h_xg^N9*im`_):?|b8DXaeI,MSXw=++=OOgMyK2~KNMgaS`,)=UAC@{a>w');
define('SECURE_AUTH_SALT', 'k!yvC!G{C,a:F|fP#Aaw+j|)Fo~Ec`*$_s9oqL&P!EoAp7^[}(oeq?7!KAI)~Hfx');
define('LOGGED_IN_SALT',   'ljW)!AuRMjfT.Gfk2ur<+lx[>C6t_$c,gZu8HX;sAeJ.M(,v >.*L*#<kjnhzAr@');
define('NONCE_SALT',       '~h%cvI1wwb1L5%vqa/{m4f$+.ZmR-*x:q^0Ark.x@{UbF,OEljPV^5%=|+;j(Tf3');

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
