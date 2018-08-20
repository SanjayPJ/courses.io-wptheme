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
define('DB_NAME', 'courses.io');

/** MySQL database username */
define('DB_USER', 'sam');

/** MySQL database password */
define('DB_PASSWORD', 'lEeAnM0yLfcuyRiQ');

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
define('AUTH_KEY',         'Qe[a98*9i0ImFzmP0Q6R%1Ljp1;f*&dLtEcK73r:$3i4O$F9A~8&pQC~ST6$r|sG');
define('SECURE_AUTH_KEY',  'tY.(S! }~*vaC8]k.Pw}E&Tb0ow=s`.ATktD1qfhN[E7oEMyTaGGol0@S!bV>Ag.');
define('LOGGED_IN_KEY',    '0]m!5EMK#A{4zRY&pWBbPQqIs3BJ7TMu_Pef(}@f&[76:U,J8tr+%?i*+zBP%4+/');
define('NONCE_KEY',        '.NWV1c)=-@GCM5tSq#;Z9:LU;)=rAB/%=of{7:AE%^5v[9=Ho?sI<u@C)^Yxh/j(');
define('AUTH_SALT',        '.r|D&_ H)#OL:@ dW$iJNO,&ozQWWq2e_~Zp|%|zAm:h7ue5S99oK ]Fe)5`7(00');
define('SECURE_AUTH_SALT', '7~;jtJW c^oBGqg^ej&EqWM[a&K8D7kthnfqlz:7F,bp)Tf20uy1:c7NX]5t/,nm');
define('LOGGED_IN_SALT',   ';(xq,YZkcI/$2-JZ%IE9c:&<MNM[<|:j_?N (a]*,-brqG[9+Rc?>GqmH{2E++8:');
define('NONCE_SALT',       'YiF-dDzuZ:sEP4Jv%a..`HIKmuUT~{Q{DB@1*@de{^?tuw8I|H7>xL8@5]I=,r)]');

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
