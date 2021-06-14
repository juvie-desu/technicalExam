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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technicalExam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_MEMORY_LIMIT' , '-1' );


// if ( !defined('WP_CLI') ) {
//     define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
//     define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
// }



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JYKj8M2Z7KUjJqjxgtEvBWHU1WOkSjtOKmotC5HjMiUVeFFczfsU6oUX7cbz8pJI' );
define( 'SECURE_AUTH_KEY',  '2cCTqpwt33TRGeS9UVxr2tssqtPjBN75CEfMChmEJm6RAt9a8dG9uxPQiH3kcOc1' );
define( 'LOGGED_IN_KEY',    'L4hrj8PVKvmKp6ItR50yvfsZaTLoE75thKWi0EJGJqzNL1RON5Y1FKpHVfz0Tk66' );
define( 'NONCE_KEY',        '5ha2BKkpGNkhmSg6vv3vVMcxApLmnzHJa4NB0So2HuKJ8OkNl3cd6TkA9KqUYJyn' );
define( 'AUTH_SALT',        'nv4AUoOUD5iPjGPG0XUrmjX61VMl64kZ3lET074mEyVFtCMLTZqru3gukehF482F' );
define( 'SECURE_AUTH_SALT', 'ka7DAC2OH9wTr5iogXp0Rc5BUjbtkMYtBQM2s4MeF83AzvEf8NgE4NEOGO92xHC9' );
define( 'LOGGED_IN_SALT',   'iO0HgQdJLdJWztL7mWURm6b8PHACyvCY0lUaLZu7FGawGnvKmB7QCx403o1m3hcC' );
define( 'NONCE_SALT',       'G6ZJw8eAAssluVuxMD0JUcyD6ZUR95BBuDTwB7UFIfzrCXDUJi2GWn6rP2xM0ZcT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
