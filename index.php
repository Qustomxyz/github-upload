<?php

require 'database/Connection.php';
require 'Task.php';

$conf = require 'config/config.php';

$pdo = Connection::make($conf);

$statment = $pdo->prepare('select * from todos');

$statment->execute();

$tasks = $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
var_dump($tasks);

require 'index.view.php';

?>