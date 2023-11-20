<?php

$db_name = 'food_db';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO("mysql:host=localhost;dbname=$db_name", $user_name, $user_password);
    // Other PDO configurations if needed
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

?>
