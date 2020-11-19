<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'w6127_nnr' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'w6127_steph' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'i3baSCBwjJIR' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'w6127.myd.infomaniak.com' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g[?XA |d,fVQYJ?!ksX%556czppm(<U]A<mjzp[3-);$(W5X^T%`z5_f&~]E%OE=' );
define( 'SECURE_AUTH_KEY',  'o*ZJEV}ub{nt@!Q5-GQVh0S)I^]jKg9/Qi]4R?[UcwQH4-_Q#7zFh4$jE]XPGIkA' );
define( 'LOGGED_IN_KEY',    '<owsr#iMJbRRrXqRhLcJEhHa._|m,Hz Q`wg`!=WA8.EE#?ew9nx<ILc1#nvyVIx' );
define( 'NONCE_KEY',        '8T,khXaW+-S[RM)kM^2A144AdJ)oHl}8$Kw.AHW*284K|3GHb:JfGz9{j{2xoqee' );
define( 'AUTH_SALT',        '1IaviAk L>81^pwP3A;dm7SZD1`PCx3[<O*k4R^sdI{?r}545jLHwD2U@D/P&MK}' );
define( 'SECURE_AUTH_SALT', '(=Jz?QbVM<HCG_4N<anR7e=C/,q&QFOe9ORXykDFcs#I;c7)]{U#K,!+$!fn>TCB' );
define( 'LOGGED_IN_SALT',   'd3E.oksWzoO$/?HKWqcp9iyE$fX#Y$Yd74v2dAAHKR*FNVi!w9|@VlCoM;s! fR1' );
define( 'NONCE_SALT',       '.0-D,JjG!laxpReQz+NFP&8;I1Khi-%_)TqLiqmNA~^Odd}(QK=EtM/)Sd3MptML' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'nnr_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
