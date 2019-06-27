<?php
/**
 * System configurations.
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 *
 * @version	1.0
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database */
define( 'DB_NAME', 'db_name_here' );

/** MySQL database username */
define( 'DB_USER', 'db_user_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db_pass_here' );

/** MySQL hostname */
define( 'DB_HOST', 'db_host_here' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * For developers: WordPress debugging mode.
 *
 * Configure error reporting options
 * Change this to false to enable the display of notices during development.
 */
define('IS_ENV_PRODUCTION', false);

error_reporting(E_ALL | E_STRICT);

ini_set('display_errors', IS_ENV_PRODUCTION);

ini_set('error_log', 'log/php-error.txt');

// ** Set time zone to use date/time functions without warnings ** //
date_default_timezone_set('Africa/Lagos'); //http://www.php.net/manual/en/timezones.php