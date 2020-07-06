<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$conf = require 'config/config.php';

return new QueryBuilder(Connection::make($conf['db']));