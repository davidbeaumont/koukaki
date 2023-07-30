<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'LNahVT8+s~8qaf+cvnP?nS1M7^jBMwTjp;`07D@Kd^LUnz}/k6|NuP9bUz?u`eF&' );
define( 'SECURE_AUTH_KEY',  '%_~K;fY#!q7kP(a1s)b^#<8vw!qeY$0`#1meHPl1}a#pmX-0I<+yCEKYxCt}zX}1' );
define( 'LOGGED_IN_KEY',    'dQ]p^MD3zb8EiB<Y5K`9,rP24o%XZN@]0.9QNFylJnLp/%6ET}d-=E~>HO6{Z>MO' );
define( 'NONCE_KEY',        'mbky+Oq[wC$?oEvqtqYtG,>n}`n$iFRJr.KLZ?`m,O1[^xV$feK&*{7KO#zf5$!P' );
define( 'AUTH_SALT',        'AFuA%=_:5_a~yN0j?zwtpLi2s6xcfKZuR35t{-yKFya!V9@#T1u}pTya^k;IYoAg' );
define( 'SECURE_AUTH_SALT', 'KZ;^-aHhdfxax(f{CINub2g)ckdhRQ;ifUo84`O4~}Q W#Wv;t^EckK@O+mENy/E' );
define( 'LOGGED_IN_SALT',   'RSOsBbW.`MUE-:1SckYc:]Qe<qJ`{ym|V23~#S=6Ous {T+@F>Sso7m<6G,JmPlN' );
define( 'NONCE_SALT',       'S}j(Le,JlUz|V,bl_#Nj1y sW&?8}qM@ioqXWY;pKG~fy7XWKAesm@bmWF{buery' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
