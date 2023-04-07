<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'netyma_wp572' );

/** Database username */
define( 'DB_USER', 'netyma_wp572' );

/** Database password */
define( 'DB_PASSWORD', 'SpA@40.E72' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'he2bgtmznceyxf40mw67gs8yyyhzgufma3yqeauflhyed9iygyshpy9hs45uugin' );
define( 'SECURE_AUTH_KEY',  'ipjyj4qe63izy1v4ywercjcl5pztbh2wyw8krk3ictb6vvw5fyijwuetjevg1dey' );
define( 'LOGGED_IN_KEY',    'kzcd3jwqwmps73fitaqkftsuvvlojtlzo15hyzpntc1buuqskka0cy6tzlapgmr2' );
define( 'NONCE_KEY',        'oeja7jikvdhhcmkoqyzfpckgl8ldgwcb3fdvtqgghtn99l1nirz4gk6kgeulg8uq' );
define( 'AUTH_SALT',        'eoyrhzwmdje9um2deoki3kjugrgc6pe6y8rszahibqfkwyjrbmezgfltdcuggugv' );
define( 'SECURE_AUTH_SALT', 'xykomwuwycvg6dzwkvvewkxzn6wkusom9zdsbfdldui7ovpgbkzserzmhxjvau83' );
define( 'LOGGED_IN_SALT',   '854xhghdwc7cdukegecxuc3lv9ksgflq910mc5mmj3ovd8lswtakn4nghk4i3jzm' );
define( 'NONCE_SALT',       'ie0f9thfucvufstnwg7l0jolsebvcfdrzfos3nupqifbsdorysgm85mkftex7ahn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptk_';

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
