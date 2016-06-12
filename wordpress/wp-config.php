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
define('DB_NAME', 'bbqfamily');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4]J^),{^sq{iQ},ozS>zXguo(BdD ;U~EV^>h^?Cu($CB</sP}[xm4@?NlJmAum!');
define('SECURE_AUTH_KEY',  'c&7d#a_&[y79KE4=jCFM)P9eprS!Wt<w;$0.:o!KY<.DfqA]ZA}^&lPs8NMmAiZl');
define('LOGGED_IN_KEY',    'u3XRf$?K9!82^R.+ro*3e%^Gh:P!@]`50]]^Vfw,Bgs]7*98LMa*Q~h<VBu_BK%G');
define('NONCE_KEY',        'l@3@a>HNSHT/f-b_@Lj@[PNr,RnmXUTMclL [7(/{}Qf3g[$|9gZJr5-d.3h{3vS');
define('AUTH_SALT',        'T(rDsR%?F1_>kebG[szi~pdN5P}<cp?#ie+HC%bOfD!CK6qZ/c9<MQ6C@USIzz3<');
define('SECURE_AUTH_SALT', 't&U/@3#cqc(]{!F{Q]LM^::Y*I8u(Egx;GHw)sUNri}dum2ZB8`tXQ?*hBy2Z[[V');
define('LOGGED_IN_SALT',   '$]9Y-t!9[u 01@f4puRWe2x=iERnC,G)fs7^}B#w=,(v[ir-Gr/8O}cv{p{&5L.W');
define('NONCE_SALT',       '{TpvEU8?O4]i;ur~A.9-`Fd0#XwUUAlOsz&n[g_a?oPG$I^=d=q?/:wHcq3kO|C5');

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
