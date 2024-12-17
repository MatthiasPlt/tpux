<?php
require_once 'vendor/autoload.php'; 

use Faker\Factory;

$faker = Factory::create();

$numRecords = 10; 

$data = [];
for ($i = 0; $i < $numRecords; $i++) {
    $data[] = [
        'name' => $faker->words(3, true), 
        'description' => $faker->sentence(10), 
        'price' => $faker->randomFloat(2, 10, 500), 
        'image_url' => $faker->imageUrl(640, 480, 'products')
    ];
}

foreach ($data as $record) {
    echo "Name: {$record['name']}\n";
    echo "Description: {$record['description']}\n";
    echo "Price: {$record['price']}\n";
    echo "Image URL: {$record['image_url']}\n\n";
}

// Exportez dans une base de données ou fichier si nécessaire
?>
