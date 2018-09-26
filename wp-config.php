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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpbanco');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'CAJ36}VOUn7b*R{(DUI_Yc|wMah5l}q)JB//2h:8qP>|FB oI>[$g&~IX#PhTc O');
define('SECURE_AUTH_KEY',  '>ZWjo<,C o[zwU![Xl84i=6X`vyiJy=b YyycSBdgBSa|OM6dl??dlb0S>}/#MuP');
define('LOGGED_IN_KEY',    '#k<Xr5p*M)r_(7@^z~bL>l G[^&f5!uZu)A8{,!i~}`M-1Ex17$0LVme.3:^B7Ny');
define('NONCE_KEY',        '!#w K;UPD>?JdYJb!k>Lb-KU(PE],bV<V!{0@wwp%-Ag2XasC+zhNu8#Kp$1POWq');
define('AUTH_SALT',        'PBB/El<Scv4KND`Fb{^lap (Mj`97j-Chq^F`;U^fah0KqY-Mfs9j^mZ9YYX6#NK');
define('SECURE_AUTH_SALT', 'A58r6`nP(sS2&^35@.:=d4HJW48t`lc{gksd@s;tnZ6A;yt_,Jr|@wgZ BkRAgTA');
define('LOGGED_IN_SALT',   'E52b90zo>q5kebl/He4WL3E5O,yC+e^ f.COCWxx2SO2]Ap{IE2,x$C+r:Nt,)gU');
define('NONCE_SALT',       'zqBFpP;UDp{gV6dxYdJ]3!*9PQw$sCb&&hGSAX7UB>Pd#voIP9@*&}*kP%&0A,GW');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpcrs_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
