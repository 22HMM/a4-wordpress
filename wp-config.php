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
define( 'DB_NAME', 'a4-school-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'WpOEQk4JJHtoS343vJxTqk2vp2KgezmDSgEL24IGOSicMBi0cnZKl8tgnx7VMTl5' );
define( 'SECURE_AUTH_KEY',  'RBTzK5uaxsbw42XmoYKcojiTmCvmAQ7utVsV0mLM9t38nRyJAdyONzCfEA3QLyCI' );
define( 'LOGGED_IN_KEY',    'FL32Ibpesf0MhkGRvZAxeIZisqXb53uXBB82qN3Dnyz2pk099jpekkGOlwh7JVnn' );
define( 'NONCE_KEY',        '0MpHia4YOPMv2ePuFwlPsvciJJOEAYwsbWxrmTcazHlFQo7co48rP60ukGHF9lR8' );
define( 'AUTH_SALT',        '2Bdh4zFsQWxYNY2dGkiVzE4qaOODYzen0zCzrcRhOuUIHosQPRhObzAMvtbvtao2' );
define( 'SECURE_AUTH_SALT', '8dqnBvbpgD3BWgQkQ18BJU3yLQgFxzCoZC8ji5Te5N8LtKWjPBYwUAQxph1SC3Ck' );
define( 'LOGGED_IN_SALT',   'I3pLVFec2cguUQxDSQLZw73tzMl3s4Oi7ChmklGjKCtNbXKLUZ0mc4BjfLfxSrsA' );
define( 'NONCE_SALT',       '0ern713Jj8wCSwsDAYYUB2ECFWpVvNb5hsuhSuEIXpKRcfPIdTe6NsoDZu4jB9zI' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
