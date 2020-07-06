<?php

//echo phpinfo();

$conf = require 'config/config.php';

try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=".$conf['db']['dbname'], $conf['db']['user'], $conf['db']['psw']);
} catch(PDOexception $e) {
        die('Could not connect:'.$e);
}

$statment = $pdo->prepare('select * from todos');

$statment->execute();

var_dump($statment->fetchAll(PDO::FETCH_OBJ));



        class Task {

                protected $description;

                protected $complited;

                public function __construct($description) {
                        $this->description = $description;
                }
        }

        $task = new Task('Go to go');

        var_dump($task);

?>