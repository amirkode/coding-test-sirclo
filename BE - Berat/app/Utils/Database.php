<?php

namespace CodingTest\Sirclo\SimpleMVC\Utils;

class Database
{
    private static $pdo = null;

    public static function getConnection(string $env = 'default') {
        if(self::$pdo == null){
            require_once __DIR__ . '/../../config/db_config.php';
            $config = getDbConfig();
            self::$pdo = new \PDO(
                $config['database'][$env]['uri'],
                $config['database'][$env]['username'], 
                $config['database'][$env]['password']
            );
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}