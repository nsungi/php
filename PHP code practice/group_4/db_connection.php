<?php
// Database configuration
$host = 'localhost';  
$dbname = 'group_4';  
$username = 'manager';  
$password = 'manager@1';  

try {
    // Establish database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
