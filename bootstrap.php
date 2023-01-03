<?php
$config = require 'config.php';
if($config['error_handling'])
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::start($config['database']);
return new QueryBuilder($pdo);