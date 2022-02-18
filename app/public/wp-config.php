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
define('AUTH_KEY',         'MPDkUS3yd6ga9z0SjmLxritGLBj96/cIhsNYRWYKeIVucsERq/8R34b+1QvgGN5OoKFOc2nVcX9sLXUJlpjOUg==');
define('SECURE_AUTH_KEY',  '93eXPNY8KvM0+Cwyy+Kju8z9HMpe9WYlcoOIs02YIYRFUgO8fygzgxjccn5laoLKLnKBVkr0n/pu6hOelV5TiQ==');
define('LOGGED_IN_KEY',    '7MDavfjdosx1DpybtpEERtpbALwb0aVTcw0D5Y1k7inBgO+1sG9mVtf7UPkjMC3pFTbSbdSEAGoV7Sl/Cd2+WQ==');
define('NONCE_KEY',        'KHDd3h1WbyISUAf+PdrWaqI4QfeEcOBSuUoj7u44uuSjPLlWu1uoayB+ZXPuF2urK//PbDrKLn1O19T6uBDIsQ==');
define('AUTH_SALT',        '6RnNxxHDg4Ce51oMdT9gu1NWGi+Wh4tQmmU8y/3qK1Gb27nCRBVjEooOEFOv2DrymnaZxgP0VgGOar7L6UF+iw==');
define('SECURE_AUTH_SALT', 'CmJ1ccln+l7UwyM/KYmq6dJTnALk7M7ZnTzgGaIbEeLqhdS9cF7mc/TBOgW0FH5kCOoLsix3CqEE/bl3mOvzqQ==');
define('LOGGED_IN_SALT',   'rGzMmOHa7RcfIcnH9E/fYBk8Ojs2CLnjd/srR3RhaSwVMoqoGCJi05DeYByyH2RXPMFFeaQvUJmD4RDgp2f+IA==');
define('NONCE_SALT',       'is49JlFTxZxBCQx6AfjL8NytJupIDI88QZdO2JtHFeZQOnQGF7u7dPzvrbniS4ksl5svim88y3DE9duJYyl3Qw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
