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
   $email = $_POST['email'];
   $password = $_POST['password'];
   if(!isset($_POST['password']) || !isset($_POST['email']) ) {
        echo "Invalid"; 
        exit();
    }
    try {
        $query = "SELECT * FROM personne WHERE email=:email AND password=:password";
        $stmnt = $BDD->prepare($query);
        $stmnt->bindParam(':email',$email);
        $stmnt->bindParam(':password',$password);
        $stmnt->execute();
        $rowCount = $stmnt->rowCount();
        $res = $stmnt->fetch(PDO::FETCH_ASSOC);
        echo $res ; 
    }
    catch (Exception $e) {
        echo $e; 
    }
    if($rowCount !=0) {
        print_r($res); 
        $_SESSION['email']= $email ;
        $_SESSION['password']=$password; 
        header('location: ../pages/home/index.php'); 
        exit(); 
    }
    else {
        header('location:  /emos-final/src/client/pages/login.html');
}   



?>