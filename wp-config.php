<?php
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'WordPressDB' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'EbaSenha@123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'GBDn7NFP)nia?duiwjGDavI7Z(W+S1k|OyJut{/q~c,+$p`R&8wOsN_Q{?lwL<Gh' );
define( 'SECURE_AUTH_KEY',  '$$[sQzj$itGki(L[XIn;T==LHZTeWZ:$yv%2D_2k^ t;hFnBE=>M%{lLoS:][|du' );
define( 'LOGGED_IN_KEY',    '49|Pn^EW NBT!L_BqSNtT%-BPKP9r8N%@=bOK8NeTp9F^R_dvEx<[Jwh ]%90*{J' );
define( 'NONCE_KEY',        '%r,ED_m6na,bNnt6gtsyq@aQ)B>qcmAyPaY)UT4!Rj0o0xbpOgw!-U!R^{!1S!tu' );
define( 'AUTH_SALT',        'keN&{Of:I s{,+ByI~49vs#e}>9&lB23Tyc<<;6Jo~q8sKik#/eL4X}Cx[W] Ro7' );
define( 'SECURE_AUTH_SALT', ']+OtP&0&7`~+`DOEXaB5kALBpAb7R?< eJJ2CK+TkA2ipuv|J/Hs}>u:^vBy%ADK' );
define( 'LOGGED_IN_SALT',   '0ouF.xE?I<_[WJ3-Al_Lf6(Y/)lK=+w49#-.f:2<Cr(5kdE]NtX{]gP[,Gm,Y+E.' );
define( 'NONCE_SALT',       'DQfGW`R@OKO~y)6Tlmgg2NMoLwmqdyq9}NC@YA3VC2hK[7Tp3$*i8SxtW|n}K(14' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
