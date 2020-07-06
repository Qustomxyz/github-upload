<?php

class Connection {
    public static function make() {
        try {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=".$conf['db']['dbname'], $conf['db']['user'], $conf['db']['psw']);
        } catch(PDOexception $e) {
            die('Could not connect:'.$e);
        }

        return $pdo;
    }
}