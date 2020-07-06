<?php

$query = require 'bootstrap.php';
require 'Task.php';

$tasks = $query->selectAll('todoss', 'Task');

require 'index.view.php';

?>