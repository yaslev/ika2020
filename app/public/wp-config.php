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
define('AUTH_KEY',         'kDN5K2karccfiKHONbUJO95xw1KGECq4j6b886lpQS+Kqj8/yutmnwaGrV4vv0LiRfreRpkKD7YoQWer9exdkw==');
define('SECURE_AUTH_KEY',  'wp6baEbBUFpWOOxDmJIePIWW/OymTJSUq0Fw/Rdk0SAuWbQmgx5o1KJ/Sc3eFKCUj4oEl2/EFyEVK3l79iT9JA==');
define('LOGGED_IN_KEY',    '3wM8skwVA5Uhcd+sZwkUvoD3KN+MB4Aqjfg/4vYr5g5XDzfmy1kb12ewsiCG4nMx5fr1Zc4wPoCCnzdgtHRblA==');
define('NONCE_KEY',        'Ejm1P8Xj+ZD0iMs89uXCy7YIkD3vG97BevPPBLzUhEDEPMGsA6k37HGsb3uMUqBw8JoF/6I6bkViBHjK4B9TZw==');
define('AUTH_SALT',        'B6URQdkY5DDi5F8xQX9KFPh0MlIsiY/0OQMWhvsdExSArYQ+LxtAIDJzQq3TMcu5e3cmtnZaCUXSnCCwUoh9jw==');
define('SECURE_AUTH_SALT', 'I82pp3EdE21xbIpBdr7aymgST/LMB/oJBjIEBB6D8fn7fP1vIF4EgCml3j17Q34eaFUqzlezVQcKfM2f/EV8oQ==');
define('LOGGED_IN_SALT',   'GIxoGiklafGqVC5nTGCvH5yAvswbZcgpvO5kPSixJB0+GjSInmrrRFaoaX1XGpFfvI52FEdJrM7XMNm7+r2iuA==');
define('NONCE_SALT',       'ljwsWbMnD17nM8p4r/7l1c0xMY+2OpBAyljH1hgzdMX8MYD/Cisnpl8Z/4WiqVXL2tnpH1miFNkgXsL36ggROw==');

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
