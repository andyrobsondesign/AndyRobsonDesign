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
define('DB_NAME', 'andyrobsondesign');

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
define('AUTH_KEY',         'ry?.R4l0JVYer.u`!c3umprI9iJ /$TJDy9T~}Fy5[{7.9o #QY^5gieG~C[39[s');
define('SECURE_AUTH_KEY',  'K^R~U$hCX)5 i ,_~c){n,%7i@.-op?nBfm~2sdh.5tH:rf92y?:dIHeEf@ZL:?_');
define('LOGGED_IN_KEY',    '1#sD%^$tL~TO;T&J!Obs^lW($*+aY:_`Ce@4IYBnRq%azJPqFX[>~!iIbvQ7_luN');
define('NONCE_KEY',        '#O<k;iC$dCI0f0=>xeS/BB67&6F6s8@?Zwn)N-Y*5mK6ntB8)e ECL{VYn=i9/ZU');
define('AUTH_SALT',        'Bv7Z)H4:BS-43/=#/{3qQt%[wNrUhU|&L/YWbYy*=|5p>eRV,7A7yH0AThhAEeIJ');
define('SECURE_AUTH_SALT', '/`=r61L_fV*9*lZlBfcnI#%=d1@ny{n4y%[][j^C%mY}wzNO]FgDO1Wl!T*_HJ-)');
define('LOGGED_IN_SALT',   'qT(,CabGl5`YRrYz_W_L[(;1Ld]Fj?tvtUF^$kf#Tx!1|)yd bNPFUy5WXL_:4|&');
define('NONCE_SALT',       'lbzs:ma]VVDrAv{}jAgV&7:pa^U,+IYK4$la&pEp>q[,JT4qtltwcpuZE<,Na_In');

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
