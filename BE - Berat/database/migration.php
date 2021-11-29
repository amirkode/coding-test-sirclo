<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use CodingTest\Sirclo\SimpleMVC\Utils\Database;
// init db
$conn = Database::getConnection();
// init all required tables
$createStmt = 'CREATE TABLE berat (
id INT AUTO_INCREMENT PRIMARY KEY,
date DATE NOT NULL UNIQUE,
min INT NOT NULL,
max INT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)';
try {
    $statement = $conn->prepare($createStmt);
    $statement->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}

echo 'Table Created.';

// down
/*
$dropStmt = 'DROP TABLE IF EXISTS berat';
try {
    $statement = $conn->prepare($dropStmt);
    $statement->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
*/