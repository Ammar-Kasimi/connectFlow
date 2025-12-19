<?php
$server = 'localhost';
$dbname = 'briefphp'; 
$user = 'root';    
$password = '';        
try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "failed " . $e->getMessage();
}
?>