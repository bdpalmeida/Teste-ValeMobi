<?php
    define('MYSQL_HOST', 'mysql.hostinger.com.br');
    define('MYSQL_USER', 'u360591317_root');
    define('MYSQL_PASSWORD', 'NM_admin');
    define('MYSQL_DB_NAME', 'u360591317_nm');
    
    try
    {
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    }
    catch ( PDOException $e )
    {
        echo 'Erro ao conectar com a base de dados!';
    }
?>