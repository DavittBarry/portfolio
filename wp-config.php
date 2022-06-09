<?php
define( 'WP_CACHE', true );

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

define( 'DB_NAME', "davittb1" );


/** Database username */

define( 'DB_USER', "davittb" );


/** Database password */

define( 'DB_PASSWORD', "Tite499453" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         'zKX&&(H(-ssvxY,4<:iG2hz`j@U~Q-OFYRk57V#oVkZb-fkeabh,2_:oD&CH)+39' );

define( 'SECURE_AUTH_KEY',  ')px2Czn_z&-tP)uO!]7P>H#B1#2`wKE[2 Kpy7NTX!Oo*p?9Rcb@KMX`UC4uU ?|' );

define( 'LOGGED_IN_KEY',    'h+t%L2<7jYU80rOBwy1-c>-4%s91;&j+JuC{ixlF#-bHf]H2z+6 yw@E7m{R_$>+' );

define( 'NONCE_KEY',        '-ulv-Zhr{r(Y4G 5Lw[%}?-[(rKFX[30[7%Ie[=P+@^r}&>]*A5COuK8Bn D+ MZ' );

define( 'AUTH_SALT',        '$*M:1{6(av.LpbC9yj/3{:0c8+fMXv.k+j*%GM2cW@s#oA=PImX5^</h502.W4;$' );

define( 'SECURE_AUTH_SALT', 'eS`9}q]L{Uiu3Nu%6.&$1r{tc=(ZbL77$.H:vOhKuv=h$i*(Bu6;2A?oNzuDe[aS' );

define( 'LOGGED_IN_SALT',   '-awxqK|K%$8FaLB2;V<?Czou7S;kfGuLfa4U.?vF6</ltRrh%%^Z*EfyHV/fbE#.' );

define( 'NONCE_SALT',       '` vB8I6WWUvw9_&:rPO+i*FEgHUo(H@HTR_r~EYWNA.t,.^avNGFmw7_llHJ{6 ~' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'dp_';


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

