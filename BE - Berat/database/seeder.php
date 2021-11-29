<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use CodingTest\Sirclo\SimpleMVC\Models\Berat;
// seed initial data
function generateRandData($date) {
    $min = rand(30, 50);   
    $max = $min + rand(1, 5);
    Berat::create([
        'date' => $date,
        'min' => $min,
        'max' => $max
    ]);
}

// generate dummy
for($i = 1; $i <= 25; $i ++) {
    $day = $i;
    if($i < 10)
        $day = '0' . $i;
    $date = '2021-11-' . $day;
    generateRandData($date);
}

echo 'Data seeded.' . PHP_EOL;