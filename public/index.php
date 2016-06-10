<?php
require_once '../vendor/autoload.php';
echo "Hello World";
$array = [1, "apple", 2, "foo", 3, "bar"];
$database = new medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);
dump($database);