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

//local
/** MySQL database username */
/** MySQL database username */
/** MySQL hostname */
define('DB_NAME', 'shop');
define('DB_USER', 'root');
define('DB_HOST', 'localhost');

//online
/** MySQL database username */
/** MySQL database username */
/** MySQL hostname */
//define('DB_NAME', 'id662022_shop');
//define('DB_USER', 'id662022_root');
//define('DB_HOST', 'databases-auth.000webhost.com');

/** MySQL database password */
define('DB_PASSWORD', 'Elbasan94');

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
define('AUTH_KEY',         '77T1JDS0 K/SSEh=S7qHu W,2N2L$*Cd9bU}$6baF 7W+4g*L[fmB{wk7GY0(s/h');
define('SECURE_AUTH_KEY',  'M6wunP`K~9_NU8[f~`De i!~`l^7^qJQa}Pl/{!o(5+mroQ7DFz<}u>;pU(4B/pc');
define('LOGGED_IN_KEY',    '8fI9dIa5C8&8%e>f?kGa7(x5]=< p`mggQ2W--8sB@,YrtSM5^QO7,nI$^sb~$WV');
define('NONCE_KEY',        '==[mvsz,b{Ncn M6Dc8< Tgoz;28vI6)] U.u)@qF:YgI=B~oK=ck`)]#x _`,O*');
define('AUTH_SALT',        'w/;i[a*6WyYB6K,`slUJpeVhF9qSK_(U@).#N=@^M7aPR:tzn>CPO[)i[J09e6*;');
define('SECURE_AUTH_SALT', 'Fyp,W|c`Mc}jY;Uid/ik(HUyK<gTJLRfKD0AA-P@&f)2~]bEE$Der!|MmT4M=a4F');
define('LOGGED_IN_SALT',   'c5:oZ#bb~X%sy2mUk_-Jz_KK@Bt*{ztgB^Z}]NY#THv<|dp$^0m_1WCZq9DSmM$C');
define('NONCE_SALT',       '~ji9f0%UlJ;yZ*5#q^Q;ouw8VPl]Ew88V_Qf:g):IZm>C>3=$]hasDe8:-:A+jl}');

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
