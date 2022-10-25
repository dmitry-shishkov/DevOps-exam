<!-- Welcome to Ubuntu 18.04.1 LTS (GNU/Linux 4.15.0-38-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Sun Oct 23 18:49:08 UTC 2022

  System load:  0.0               Processes:           130
  Usage of /:   27.7% of 7.58GB   Users logged in:     1
  Memory usage: 22%               IP address for ens3: 192.168.199.13
  Swap usage:   0%


  Get cloud support with Ubuntu Advantage Cloud Guest:
    http://www.ubuntu.com/business/services/cloud

 * Canonical Livepatch is available for installation.
   - Reduce system reboots and improve kernel security. Activate at:
     https://ubuntu.com/livepatch

124 packages can be updated.
7 updates are security updates.

New release '20.04.5 LTS' available.
Run 'do-release-upgrade' to upgrade to it.


*** System restart required ***
Last login: Sun Oct 23 18:38:45 2022 from 195.112.99.162
-bash: warning: setlocale: LC_ALL: cannot change locale (ru_RU.UTF-8)
ubuntu@user14-exam:~$ cat /srv/www/wordpress/wp-config.php -->
<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define('AUTH_KEY',         '91it41^%_#jmM+Kweny^|J(Aa#0HJljqie7,b+~k@$Q58s-w!Yc(Sw--[nkT-+[1');
define('SECURE_AUTH_KEY',  'HrrV<7l80V{=83/Yph-}GjD8c3p8)ItMNBCG^1$?#{zRb:1d[B0 @=TvAs5!JAQO');
define('LOGGED_IN_KEY',    '.m^.}4+/pga_L?]Plv}u:qT?&|i[LK}WUQ|<Snl.g8/]tE.e8Uc.JAE7@`x-fH)x');
define('NONCE_KEY',        'u}RI--iulR;k8+V7ylG=D!0O*>ROj){gg|$_2%lq?#ej-kg$ES|hlZI,##O8h.-8');
define('AUTH_SALT',        'wLO&-+|7QVj*[9@&NoXJyN sL1gZ..I6/N~t*`sL!:d#x=X<O.2]e7u6vQ3r$H2}');
define('SECURE_AUTH_SALT', 'vUrBz%:/%y1Ike.Fn|5IPrB=03[;TdON-p [7P%f/Y# 1|E=Eq00~h*S2hu_I-k#');
define('LOGGED_IN_SALT',   'LE=L{ev&<*W?`pk^8`74AuTB_~Q0.+$V1T-?+D9&Zb=eJP+ BB!}cw77><kgBqK-');
define('NONCE_SALT',       'v?+aFOV_4ku9[.G*bln:>A1xEW4v~=5lQvrc#RHN=F-.N^W>_R^,fFR T]1|Jad~');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
