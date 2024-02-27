<?php 
    session_start();
    $servername = "localhost";
    $serveruser = "root";
    $password = "";
    $dsn = "mysql:host=$servername;dbname=emos";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        http_response_code(200);
    }
    try {
        $BDD = new PDO($dsn, $serveruser, $password);
        echo "connexion reussi";
    } catch (PDOException $e) {
        echo "erreur" . $e->getMessage();
    }
?>