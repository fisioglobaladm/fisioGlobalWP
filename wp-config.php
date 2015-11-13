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
define('DB_NAME', 'i1945890_wp1');

/** MySQL database username */
define('DB_USER', 'i1945890_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Q.r0j6L69HU89iRYBu&21(~8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'sai6fDIc6UDIwYrhZhQ7M6wcMsiimoPTO4k40yTz0IyrwB5KWu9wGvyHI7gILRPv');
define('SECURE_AUTH_KEY',  'cPsjeQQJZ9MgAFbQJk2oDyk4BxJNoU9qgVEQJndciC6Z8mYB98cvaNjK78OZAYCB');
define('LOGGED_IN_KEY',    '2k6wEpVG5DGYNbX2GiWJmcP7IRxJb2CJgjy2E8dR3k2gxhgbSg07tdWzn71fKGNh');
define('NONCE_KEY',        'n51hq06xRtbsmuH5AsI3GB8RAUvCKYoAgBId3OXFF9Xk53FEFYmPvpSPMJawhZfZ');
define('AUTH_SALT',        'KysukbNFAhSt32DFnizcb6pBaHijzeMNn2XBCWvOX8Kul038SusXuznFLQ25DAgS');
define('SECURE_AUTH_SALT', 'gfZ4HozIt4uumZXR8KlhqjIAOkabY52hnZB2k3GkB249BKnCVK2pZ4ktGuSLLssS');
define('LOGGED_IN_SALT',   'iejLWlwOwmJcnpyj6cYwkOvNe4lXWl4MzyIya6e0bv2o3CG65WLnQ0Xva78o7Y9Z');
define('NONCE_SALT',       'EA0LWssVG9bgNhJKis8uB2yiVyGTnYSQcRA3Yh8QM818XBglkhbWKhpDkcqhWi7s');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
