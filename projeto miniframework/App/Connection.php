<?php

namespace App;

class Connection {

    public static function getDb() {
        try {
            //como PDO é um recurso raiz do PHP, precisa colocar o \ antes de PDO
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        } catch (\PDOException $e) {

        }
    }
}

?>