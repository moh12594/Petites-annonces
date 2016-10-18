<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'petites-annonces');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p7l+0Swlls_li!0%o/:(9K>w]/N#2((/B_vyih.D)O~N/?,|FqDK;3C$PYAi>n~V');
define('SECURE_AUTH_KEY',  '/*1gT g+/RC=&:J5nqD>7z2)_G8j*<vyJLB0Hvu6:vizup8KW!G>6AU_:o6`7;+#');
define('LOGGED_IN_KEY',    'Q(<.~xXGE!sc_h6BS:J|+F0],!{U28CQkv#q?1iFua!]@}7WWy[,nOu=)TaLg;,S');
define('NONCE_KEY',        'Y(xy:1)yMZjE&%^2)gDkv?o%Jpc}V%3;VhsuP1U^eGt}YL*mu2*Bdtr2H:W6c@n4');
define('AUTH_SALT',        'L6=Djxj|D1/GZ9nM!s;1mJ&VL^,bc^WPl1$ECQ#B`A/I8Jl(p=>I+T-t!]f4rSW`');
define('SECURE_AUTH_SALT', '#Vtr2YwNS{&aQfdM{E}AE}s+bvATh}$)v;Vsn$Ls0dO~ZJ*C`4g#b>4`1ZFCW vb');
define('LOGGED_IN_SALT',   'ZwTay^4gpwO@5h^.D:QY.d8HOSb0U(J5u?STRp#+yg_fR#wc^]k<3V-zW)E~ x>S');
define('NONCE_SALT',       'K@Atk0P<A*V#~arBOY]eB8D{GNMr? HV.CZcRW!64V0Y#xG[Z+qchbxTht~mfR*V');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp12594_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');