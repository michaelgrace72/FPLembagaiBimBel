<?php

$host = 'localhost';
$dbname = 'fpbimbel';
$dbusername = "root";
$dbpassword = "@Saya.Mikha72";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Path: includes/dbhinc.php