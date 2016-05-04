<?php

class Conexao {

    private static $host = 'localhost';
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'mar_de_sabores';
    /**
     * @var PDO
     */
    private static $connect = null;

    private static function conectar() {
        try {
            if (self::$connect == null) {
                $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$db;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$connect = new PDO($dsn, self::$user, self::$pass, $options);
            }
        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
            die();
        }
        self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$connect;
    }

    public static function getConexao() {
        return self::conectar();
    }

}
