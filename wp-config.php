<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', "eletfaja" );

/** MySQL felhasználónév */
define( 'DB_USER', "root" );

/** MySQL jelszó. */
define( 'DB_PASSWORD', "Bajcsizsm" );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', "localhost" );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '/~&$aX}PFfkj^.)fQ*!txt(S/h#AtQpjvqU|dOv!k6-$xRqzx?$sM{Ye+ks:NW-^' );
define( 'SECURE_AUTH_KEY', 'Va5jMQVS;+q=gd~kowi|px`]71kG}]V5k[Iip9{#hHok+ZcaTzp/D<krTQ:R.+Zf' );
define( 'LOGGED_IN_KEY', 'c1&[u*#3#X+.2/-:63J^KgT?C7j>WV]B6uy8.t?u[MkpR}Y /OR|I5GE7WIo3_^j' );
define( 'NONCE_KEY', '{t<S=K<_*@QoRU9hG7x?):j qAqM8syMlQ+Z/{gzm`9x=<2F2PJ;@(ozqo0!&|KQ' );
define( 'AUTH_SALT',        '<QGrp70u=H&Q++qh)j}OAUFI8 J&md,c,`gfMXx?KSu:/4;-Dlvph42+^~N=ro2?' );
define( 'SECURE_AUTH_SALT', 'WNr!|HA8Aq^BS-Mk,xrQ[^*HHZ)1r/^DY^VT/)Z*/x-k4nJz95I[}zF(LW-H56z;' );
define( 'LOGGED_IN_SALT',   'H|`>^P.su%Qiqxm@YevQ<q)Grr^|#8T4tprRhUsfCudT.8uQ+)+EijZZHvhhg(eM' );
define( 'NONCE_SALT',       'V:?ZPRXq=XFF8E!zo$Vx{6{T!)iV0_&b5w:&a~vYYC+6M~`f~+P].3|F#$|zq/!O' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define( 'WP_DEBUG', false );

/* Ennyi volt, kellemes blogolást! */
define( 'WP_SITEURL', 'http://localhost/eletfaja/' );
/* That's all, stop editing! Happy publishing. */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
