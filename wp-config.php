<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '' );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', '' );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );


/** Nome do host do MySQL */
define( 'DB_HOST', '' );


/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e5=5<$qlu/Kck2wK2)btXyd7;>SBZT2q?RP_7NMdIs #Y2g$y~7~logkU#(Rd:TJ' );

define( 'SECURE_AUTH_KEY',  '(E)>9egG:<[IWe%5[*&9QJ4#J.&tA7O%^kMZYjAJ:B0m^0+P~M#hpy_OrdTQg]HU' );

define( 'LOGGED_IN_KEY',    'R;OnLae#_PWNfW>Ie{<>sJOTOB{}0bqLeJ}N/hW(@]:#N#r6yRw=<y.)==f}<LOd' );

define( 'NONCE_KEY',        'MZaV?8UF 5XOLf/#Q|,v-{~EnT61!+>VRN(w=qQ%KzD+w<u?<41L:[=zVg(-[j?p' );

define( 'AUTH_SALT',        'R$?THf^,9EB}`UgB6G^H}]/&yLW++g2(u]`nveqQL]K~9L)]v0IL(=v/:Z*:~};Y' );

define( 'SECURE_AUTH_SALT', 'zQ+t:(?i#j4=i(^%|=vpc]|WBxhC)bb-z=6nGZ?D^aUqc~YIe`iA@0m}q/%r#OVM' );

define( 'LOGGED_IN_SALT',   'h~v!uCyk6EE36#^?*//PUsB8}>E6!xdmQgLmrC*Mt*U%j_yE A@@mD%N.l}Y@Q!7' );

define( 'NONCE_SALT',       '%}rj[[XSDY)zi06F3>aAvW3$Q+Bu6 [*qCB6cu/vV`jBiBFS_zoMTN!gI-Z|__X/' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
