<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$conf = require 'config/config.php';

$query = new QueryBuilder(Connection::make($conf));