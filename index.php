<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';

$conf = require 'config/config.php';

$pdo = Connection::make($conf);

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

require 'index.view.php';

?>