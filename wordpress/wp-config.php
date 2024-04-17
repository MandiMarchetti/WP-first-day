<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'first_wp_database');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mx;bN75F7`Lv6<A>]&).j<P[-j2x)Z2U%hK5.d*%wlUr?+Du7z/mFj1Z{fTKn5Hn');
define('SECURE_AUTH_KEY',  'F~>K? Di)cWqssQu$C6c$Z*52PEQfE)!|AZ5G}#_~y^#*[2klk$IT~LLPsQ m.OV');
define('LOGGED_IN_KEY',    '>ii>+Oei)5XD.vA>V6.#8Lhk;.|+uO3+l2k2Sdc&s3]jCTY~GjipB|CF+$>Mnb2T');
define('NONCE_KEY',        'H|*XC{v>G6wl0#f@<E|EDTSz7k/#>+mI3My%P8i0e<8$qAZ0k.%|2`C&;JD!3Qzh');
define('AUTH_SALT',        '&i<bgf}%wA`9D;UpT;S+|BF@u1#+DP~0nWsgjhjEG*?=&*KSvRJl~Iv+:J[/DjO4');
define('SECURE_AUTH_SALT', '%KO<SAm*S4D?-@<L-y7+(-$|D+=6k$k!/f(/TWu+U;,UT*A$$zl+9oYr_e!P0|-I');
define('LOGGED_IN_SALT',   'E/S2z9%#4:wi3T]FY=s%@:2!pKu8/Sk22-t+S2O=f{]rrmP4F8;+I0|[i-|;Hg<b');
define('NONCE_SALT',       'E5g_arhpF74KEEj.M;A{9?g!U;|=vbP5;zBDGPv,$g0-OGfH12AWj:J@JE.0zPHW');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
