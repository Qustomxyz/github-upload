<?php

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$conf = require 'config/config.php';

return new QueryBuilder(Connection::make($conf['db']));