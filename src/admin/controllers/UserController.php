<?php 
$servername = "localhost";
$serveruser = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=emosl";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    http_response_code(200);
}
try {
    $BDD = new PDO($dsn, $serveruser, $password);
   
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}
    class UserController {
        public function create($name,$lastname,$email,$password,$tel,$adress) {
           try{
            global $BDD ; 
            $query = "INSERT INTO personne VALUES(:name,:lastname,:tel,:adress,:email,:password)"; 
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(':email', $email);
            $stmnt->bindParam(':password', $password);
            $stmnt->bindParam(':name', $name);
            $stmnt->bindParam(':lastname', $lastname);
            $stmnt->bindParam(':name', $name);
            $stmnt->bindParam(':tel', $tel);
            $stmnt->bindParam(':adress', $adress);
            $stmnt->execute(); 
           }
           catch(Exception $e) {
            echo $e; 
           }
        }
    }

?>