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
define('AUTH_KEY',         '+fAbh76+kYBOVwWDOutD5s6lRM9bky0Cywj58oCwktgdGMa7k3iseT3mtN9s9Fyt19RTN1IIbd3VAWD73fQQfw==');
define('SECURE_AUTH_KEY',  'xrwf3n2/Y6Xka1feCVEDgBYBIjuvVh0HVloD+4aFtoHQM/fPfChXhpaPi6TIp129SLz9JlzfLMKDoG8VRfZh3Q==');
define('LOGGED_IN_KEY',    'OS7zrO0rm7tlxNvQwweecWfN0SRsVDeasYU3/JsigiVN95C+E/iG8O+G4HhBe8O5/SLav4cjwfUy7bUaXvExjQ==');
define('NONCE_KEY',        'zM81IUlTzWkXE0DKwEjW7rfWdI/xJcCZcGsQ93iV8ClV6S+Rib99QljTABs9gzzS0RBUjnZW9F2KJJVz6a/LLA==');
define('AUTH_SALT',        'jx0vF4tGKXt+XGG4AYMSQ5FygfAW0t2hRaQFvFH9BBWkwQU8W9VrkGyVhEtsrGSt88yd0s+Frz+reoYLC7Cs4A==');
define('SECURE_AUTH_SALT', 'ZsGc12/xhdBB+vXrAkFGnkVjADb2N7DvPJuj/kgXqetGdiGBqlwlGCOznwaQITtNEIZdNalql9BiuCd3tyUhtQ==');
define('LOGGED_IN_SALT',   'nJK3K2hUmIvISFCWUKCtGvqlqcJ3/T2WVsrizzK7CGkUrln56/vaSo35rONuvyRDj5YQTA2jewYhinWRwvuj1A==');
define('NONCE_SALT',       'lxwzx4G9ewkPG55MphA8vekDY8tZ9HtTqntwd03Qv+Y/2Apo4YFxlU1JSxN9ojHHYrmO1jv0hlD6AR+K4xABxg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
