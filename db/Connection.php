<?php

class Connection
{
    private static $conn;
    function __construct()
    {
        $this->conect();
    }

    function __destruct()
    {
        $this->close();
    }

    private function conect()
    {
        try {
            self::$conn = new PDO(DB_NAME.":host=".SEVER.";dbname=".DB_NAME.";charset=utf8", USER, PASSWRD);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private static function close()
    {
        try {
            self::$conn->close();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function insert(string $table, string $fields, string $data) {
        // $data = [':data' => "{$date} 08:00:00"];
        $sql = "INSERT into {$table} ({$fields}) VALUES ({$data});";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($data);
    }
}