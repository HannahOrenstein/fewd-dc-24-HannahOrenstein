<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'recipeh0_f00');

/** MySQL database username */
define('DB_USER', 'recipeh0_f00');

/** MySQL database password */
define('DB_PASSWORD', '9D83CEA7FBzqru1b4j6p0v5kt2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '9AMzaWk;rNC%`|$-=cHm`;;A.|&{xKx_9&~[!fO`|vS5^{U?-.EdlRF0j+M%S S_');
define('SECURE_AUTH_KEY',  '|^dsi)g$I!$Ig<|UWv&1L8_-YKp9o)G5:-2@>@Cn7;;d;t+8|!pqOEwbgUsW8Vwg');
define('LOGGED_IN_KEY',    'Lgpy#N:m@W;r:s4h8?r_DQP;YLB^^~b* J4+DzHx6CaNi$wsF2-z?~qp=j=Bs6Z&');
define('NONCE_KEY',        '=SxjI_WITop]MG]HV RLJ^-k8!}|){bl.1gf3Tt9w|7@dV0`q$VM:s=N)DMoJ[|I');
define('AUTH_SALT',        'o@ho}Nsbv7}:,UC:*je+l(l%{J ]A0ak]hCL,9R/s~L).Ldl0En[g3uhw59RgSeN');
define('SECURE_AUTH_SALT', '~$2uQ,mChI+`_+&nR9cxdDWB9Djp|>UfWuwerR9t]cP$0`vYf31mc//-o<( vaQ*');
define('LOGGED_IN_SALT',   '_Rjk/-.x(^1Qz)orDrt|*O]?GpQGj+^bhv3Uk[u_#s(U G2yoTlPX<W0{RhM9tN[');
define('NONCE_SALT',       '|8eg2p;oT5^fK~1jgXj7+OhcbLEX-wE1D>.-RcAyedT*-P+y1RpGm0K+n_JwpX8{');


$table_prefix = 'f00_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
