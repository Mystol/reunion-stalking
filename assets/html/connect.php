<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reunion";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // définir le mode d'erreur PDO sur exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>