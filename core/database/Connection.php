<?php

class Connection {
    public static function make($conf) {
        try {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=".$conf['dbname'], $conf['user'], $conf['psw'], $conf['options']);
        } catch(PDOexception $e) {
            die('Could not connect:'.$e->getMessage());
        }

        return $pdo;
    }
}