<?php 

namespace CodingTest\Sirclo\SimpleMVC\Models;

use \PDO;
use CodingTest\Sirclo\SimpleMVC\Utils\Database;

class BaseModel {
    protected $tableName;
    protected $primaryKey;
    protected $fillable;
    
    private static function getDbConnection() {
        return Database::getConnection();
    }

    private static function getCurrentImplInstance() {
        $className = get_called_class();
        $instance = new $className();
        return $instance;
    }

    public static function create($arg = []) {
        $columns = [];
        $values = [];
        
        $newInstance = self::getCurrentImplInstance();
        foreach($arg as $key => $value) {
            array_push($columns, $key);
            array_push($values, $value);
            $newInstance->$key = $value;
        }
        $statementStr = sprintf("INSERT INTO %s(%s) VALUES(%s)", $newInstance->tableName, 
                            implode(', ', $columns), implode(', ', array_fill(0, count($columns), '?')));
        
        $conn = self::getDbConnection();
        $statement = $conn->prepare($statementStr);
        $statement->execute($values);

        return $newInstance;
    }

    public static function find($id) {
        $conn = self::getDbConnection();
        $statement = $conn->prepare(sprintf("SELECT * FROM %s WHERE id = ?", 
                        self::getCurrentImplInstance()->tableName));
        $statement->execute([$id]);
        
        $newInstance = null;
        try {
            if ($row = $statement->fetch()) {
                $newInstance = self::getCurrentImplInstance();
                $newInstance->setPrimaryKey($row[$newInstance->primaryKey]);
                foreach($newInstance->fillable as $f)
                    $newInstance->$f = $row[$f];
            }
        } finally {
            $statement->closeCursor();
        }

        return $newInstance;
    }

    public static function all() {
        $conn = self::getDbConnection();
        $statement = $conn->prepare(sprintf("SELECT * FROM %s", self::getCurrentImplInstance()->tableName));
        $statement->execute();
        $res = [];
        
        try {
            foreach($statement->fetchAll() as $data) {
                $newInstance = self::getCurrentImplInstance();
                $newInstance->setPrimaryKey($data[$newInstance->primaryKey]);
                foreach($newInstance->fillable as $f)
                    $newInstance->$f = $data[$f];
                array_push($res, $newInstance);
            }
        } finally {
            $statement->closeCursor();
        }
        return $res;
    }

    public function getId() {
        $primaryKey = $this->primaryKey;
        return $this->$primaryKey;
    }

    public function setPrimaryKey($value) {
        $primaryKey = $this->primaryKey;
        $this->$primaryKey = $value;
    }

    public function update($data = []) {
        $columns = [];
        $values = [];
        
        $newInstance = self::getCurrentImplInstance();
        foreach($data as $key => $value) {
            array_push($columns, $key . ' = ?');
            array_push($values, $value);
            $newInstance->$key = $value;
        }
        $specifiers = implode(', ', $columns);
        $statementStr = sprintf("UPDATE %s SET %s WHERE id = %s", 
                            $newInstance->tableName, $specifiers, $this->getId());
        
        echo $statementStr . PHP_EOL;
        $conn = self::getDbConnection();
        $statement = $conn->prepare($statementStr);
        $statement->execute($values);

        return true;
    }

    public function serialize() {
        $data = [];
        foreach($fillable as $field) {
            $data[$field] = $this->$field;
        }
        return $data;
    }

}