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
define( 'DB_NAME', 'id17527255_wp_d33ded94d8acf52ca52c6a923d373ef4' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'id17527255_wp_d33ded94d8acf52ca52c6a923d373ef4' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'x6#MrdEvWevph7\E' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A3qL7EPKzki`<;UC!}TiAD26@Y+n8LYBD16*|b7~g7@dKyMkWUr:_wm;g O2.1R;' );
define( 'SECURE_AUTH_KEY',  'RFFG=wyd{?72{5PA(@6bP6~sK-=[tOM2R%(@1G,FpTGLKyM3qOq%kRPXoZU7_-Y)' );
define( 'LOGGED_IN_KEY',    'C#V3ec&xQ)LpKUekPL%qt@)J;|QnSWM;1bC* mJ$->WfN$#z}MFt8@j@|A.;H^kS' );
define( 'NONCE_KEY',        'L$%@ws.xLs:?E_|/^j;EirwK*yOWIjo=f>,O@}!!>sC?4jUY*GT v/C|n?MUj57$' );
define( 'AUTH_SALT',        'PRD/0OW]RbhuA/jpp:2GF%W*1}+K]$wV##}1gdOyGj) L l9,7lA4?@o??j{O}eK' );
define( 'SECURE_AUTH_SALT', 'l>T*;_^oOv,pbzY6`{kNbnk#Q3D!qwB868d7qiLR@# ^0B 5w)I8FYiU5Tl+lk]U' );
define( 'LOGGED_IN_SALT',   'FnF6|*SyBx:TwCIQn56FPpDnOdYPU[hQuv&9kP/3b?c<*|JXhQD8p84h(@:0JYMo' );
define( 'NONCE_SALT',       '0He}vZXy%Ixrc2Z@2a6B+#zQ{<*Gyce*y(pvW[h0P-|om0Xzgj#bl#TP(>59-(!q' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
