<?php

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

require 'view/index.view.php';