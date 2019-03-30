<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'shop' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'halfonso' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'bluetooth' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'E?!CX]lv.r*1uY=D(YW&t{w|RL(aF$a7Pp_0B;.r] $<(I/mm& .F(OZ]6gySxMp' );
define( 'SECURE_AUTH_KEY', 'P-Nt1qPT-;>QK-O%ER~3GJ`?b_?Ff|Gr;t3GYP9(C x9{aU~!*~r+o8v9dhX^hr:' );
define( 'LOGGED_IN_KEY', 'sAL|u;RymOHccBOZ}i$V`%?v.t&|sW8b`hJ/<0#*Sz_$Be,C^lr>=9 nIDCi0rfB' );
define( 'NONCE_KEY', 'UM%^{JY5?4@Zi1 2skXsPWeLD!jx6c6#5zg}|~K3*mpx_L0s5EJH9eeUw7VUR&7N' );
define( 'AUTH_SALT', '<4>s6nIg{Cv_0csI7U:Ymuvqm-I_%oYss*r%kDOa*g-4[,Y<?T?r2b=tmTN^9~i4' );
define( 'SECURE_AUTH_SALT', 'JDht`6-Dsfl:s8o2g:UpYt5Uj7^!EsQ&IJykL~skyJ)4(K;?kFAeV]z6 B66:dji' );
define( 'LOGGED_IN_SALT', 'u:e?qDItf>A>FVdGpxatt|SAd[ QstR^A8H~?<A?AJJ;,*UI_d#Z2@?p LhT3[OO' );
define( 'NONCE_SALT', '5doPy,m<vGY#VwrOzAx]:-MwPZBc8RRt,*7pmu5%r0&w(?,>+<j-dv%q!SOWsG0r' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

