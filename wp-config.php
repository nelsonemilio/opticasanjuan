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
define('DB_NAME', 'opticasanjuan');

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
define('AUTH_KEY',         '`8)XOQXI!=,{Zc]LzW~hkr3%akSpr]J2u>a>s-2!z@a&7c<$rRDfR(=5Z16CKF9O');
define('SECURE_AUTH_KEY',  '&L64Om:|gJB2dHCsm?gQx/bjt5&Fa1-GPy^M~-Dcc7/f{Z+g;X3ahDN0l8DL+,Z-');
define('LOGGED_IN_KEY',    'v*]pjXjm4l7k|Z)p(~Xngd@GDHW$K3[B+tuF{gzSAe@]lxa#qcD#/i}Mh2Cu#-SC');
define('NONCE_KEY',        'Rc~&7COc$RQd!sY2$q;[>M%?UTU,0jf^-7(?rWseHy<BK(A.lWs)$0ep2w^lbd9y');
define('AUTH_SALT',        'r=AN/.KSl/]bC@XaAPolTH?`E,qpe73 /A8guQhHo?T;p&YfD-zB|e>4ZG_7#jeA');
define('SECURE_AUTH_SALT', 'tHFmz9JYK62PAD*Nh!Z3.UzjM1c @L$=88S`oy Y#292bxk?uuCyWuZfsReZkLJw');
define('LOGGED_IN_SALT',   'B]q1NIzXw<IAgU97[9^j~1J.JMH]vEgUI!zV-(+0rv,=9L*fO3.=Aa@JRlgj3I#j');
define('NONCE_SALT',       'y,An%|4uP,F,(|=3!)NVu]?#[C~c k75q6&a4l!M33Pu!l3aIp qOP@)09s/Z!9~');

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
