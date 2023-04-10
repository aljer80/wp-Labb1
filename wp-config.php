<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'project1' );

/** Databasens användarnamn */
define( 'DB_USER', 'Nisse' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'pw123123' );

/** Databasserver */
define( 'DB_HOST', 'localhost:8889' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZuKOaq ZpL--.gk&d%T%i~v}kFvyt:w^od;BWi S(?SL^3dgCN=Am^11IdEk|3$v' );
define( 'SECURE_AUTH_KEY',  'r0j j|`NtxRPM*KIR .fmYgxu#*%n^R.J!mq9nT2x<%-)iW#>98p0*&)I]!$0* T' );
define( 'LOGGED_IN_KEY',    '&<F$]tsTpsIZ_x:Xe^2)PzUKG7gPio0H=wJ#9y{c!MS?:=j@56g11?Ew[z#NJ]qg' );
define( 'NONCE_KEY',        '~P;VMs=i-kJI&H#_D2(?&i9v5X4(:!^l&>rs>Hq2BC:cU;(r60af{MD:;NOQ,%=`' );
define( 'AUTH_SALT',        'm={ZAZhDN%6h%aH2U%20N0EnL$Xvm.m/-sSZnUg<wi?KR)4SA<MTb_b.;yWF*L,i' );
define( 'SECURE_AUTH_SALT', 'C{2Ykm$.ii+IfNEXvs+%rG0<3uSv+VAw+Eta*Kc$v~EIJS@vs>}se|zh,Rtj>ZG<' );
define( 'LOGGED_IN_SALT',   'z3}dfr*u(0#LZ|AYF7_hs>YQ-)fS$o>]DYZ_7Fd$F}g~U7L;1Db.SqB6z5Y[z7Zl' );
define( 'NONCE_SALT',       'T3H:p,wN_Iu{P^kY*.MNN+N@<KCvF[Y$rpc50P(wO_!HT34,V/RwwVaCpC7TtlkQ' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');