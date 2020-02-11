<?php
    /** O nome do banco de dados*/
    define('DB_NAME', 'xxxxxxxx'); /* substituir os xxxxxxxx pelo valor do campo*/
    
    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'xxxxxxxx'); /* substituir os xxxxxxxx pelo valor do campo*/
    
    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', 'xxxxxxxx'); /* substituir os xxxxxxxx pelo valor do campo*/
    
    /** nome do host do MySQL */
    define('DB_HOST', 'xxxxxxxx'); /* substituir os xxxxxxxx pelo valor do campo*/
    
    /** caminho absoluto para a pasta do sistema **/
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
        
    /** caminho no server para o sistema **/
    if ( !defined('BASEURL') )
        define('BASEURL', '/');
    
    /** caminho do arquivo de banco de dados **/
    if ( !defined('DBAPI') )    
        define('DBAPI', ABSPATH . 'inc/database.php');

    /** caminhos dos templates de header e footer **/
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
    define('ENVIO_TEMPLATE', ABSPATH . 'inc/envio.php');
    define('PETISCOS_TEMPLATE', ABSPATH .'inc/petiscos.php');
    define('COMBOS_TEMPLATE', ABSPATH .'inc/combos.php');
    define('CHURRASCOS_TEMPLATE', ABSPATH .'inc/churrascos.php');
    define('LA_CARTE_TEMPLATE', ABSPATH .'inc/laCarte.php');
    define('PIZZARIA_TEMPLATE', ABSPATH .'inc/pizzaria.php');
    