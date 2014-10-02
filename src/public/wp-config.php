<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'project');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'project');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '0000');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B=_OHkVl=~%+<22m59TOL[@1?0w$i+!&}7n[!*o=81W{xo~t$/^!t2Ja4j_jZw`#');
define('SECURE_AUTH_KEY',  'T)^<D +K8R&Qa#u|ZXj_0(pD6a9?f#bUL{ba.V|%,U%*{l?x&Vku}o339*[AV~Vi');
define('LOGGED_IN_KEY',    'tOy=w`dXRu])#Q+AN<[gD`1,Y_!_|2?SYk8,.=-{^K#JBb7La~+)-b$%X1.@{<GO');
define('NONCE_KEY',        '-N+g}P+Z5,g{qnWTB/8Ilb5#%cXk/Id6^!cgBU;=O7Lk#0N}Becq_r@Q{A`/{~L6');
define('AUTH_SALT',        '#Q@>v31 S1oZxAgSSve`kB;_g:aJ?r(]]#W]}cq)D3N9Jc[Z%B2;Hs^wSn] |S7s');
define('SECURE_AUTH_SALT', ';h4$GvG-cc9uk68*IDV9Yb]nV!9u*XcF@yq<]+C8Y-HU;S:)mx$!x&Nk]6#qLXZ5');
define('LOGGED_IN_SALT',   'Y<ZQj2fafgweoH!Fu8a1C`]4H8EeAR(WDrGN&OODpy4V8V|1z>QVG[UXk}:YQCSk');
define('NONCE_SALT',       'ISE)M!=xdIW&ZNXy>JF8(qq*2sT,J|(G0i<g|7,=[Ui.H2}0*~t_%)j+sSTL+]Uy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');