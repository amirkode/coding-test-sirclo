<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use CodingTest\Sirclo\SimpleMVC\Utils\Database;
// init db
Database::getConnection();
// load routes
require_once '../routes/web.php';