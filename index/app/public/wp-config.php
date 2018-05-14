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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uvfm0kNvw919G9l6bt/u+TZ+bWSWWj1BNxDHNbPyiTMftZoqVzmolBqOtF2ICC5va/kgccOJkXoXD+KJKd3QrQ==');
define('SECURE_AUTH_KEY',  '6I3QTyHgoA7Cuz94F2tPhiIp9Feb/Qqnrlw9yEvBoSbwRfawVbmIZbXaSqRfMg2T9RL16iWId7XhwyOHCL4p2w==');
define('LOGGED_IN_KEY',    'JcQUfNgvDmBCnCaj6LVm+3+SqUbp+upxWDndJh3G/WS0URoPAatAlOhw2WwdAQq0raCLObzVe63XTGARuavX8g==');
define('NONCE_KEY',        'bQveL0trEgYYMpw1sTOcvDFQzze3uPDr7VP1qIWU2tdsfaJhYouzWQNXMDLZlxSNXqkBR8PmH9jaB/RjOD8jFQ==');
define('AUTH_SALT',        'zTF/ls5vLVIAebdSBihYi7OQ2sCb9MF0WWgkmoCeLdBqPFDh9WU3fvXXaZ895PvRTsgNlEN0GJ84HdHxqLCcig==');
define('SECURE_AUTH_SALT', 'cIV9adudpe/u+QLdoj5/0vnjUWHJ/6FOUVTqe7UHBEKevh7gH8qFZY5o0GyuR7ak/97KEQq+CVCfvC36dBuyhA==');
define('LOGGED_IN_SALT',   'HGHVWYFRrjI9yOTSOHQxI3m6zY7P0wns87Vvc5RvZ1VUa/9R5OQZl2Xm4NZbbBGIdjQrRVunDt1QQa2NINB+Sw==');
define('NONCE_SALT',       'zkO6R44KXv9uymKAR7kPxbSZJMXN5QGP5d/W1chufOc0mC0Amwde0s1hHUc8rz3ZNCpzmpCWmavT5xDgyBCteA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
