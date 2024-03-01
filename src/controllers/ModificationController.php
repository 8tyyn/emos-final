<?php 
$servername = "localhost";
$serveruser = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=emos";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    http_response_code(200);
}
try {
    $BDD = new PDO($dsn, $serveruser, $password);
    
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}
    class ModificationController {
        public function getAllModifications($id) {
            global $BDD; 
            $query = "SELECT * FROM modification WHERE cours_id=:id";
            $stmnt = $BDD->prepare($query); 
            $stmnt->bindParam(":id",$id); 
            $stmnt->execute(); 
            $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            return $res ; 
        }
        public function registerModification($cours_id ,$admin_id ) {
            global $BDD; 
            $query = "INSERT INTO modification(`cours_id`,`admin_id`,`modified_at`) VALUES(:cours_id,:admin_id,:modified_at)";
            $stmnt =$BDD->prepare($query);
            $dateTime = new DateTime();
            $formated = $dateTime->format('Y-m-d');
            $stmnt->bindParam(":cours_id",$cours_id);
            $stmnt->bindParam(":admin_id",$admin_id);
            $stmnt->bindParam(":modified_at",$formated);
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            return $rowCount != 0; 
        }
        public function getCoursModification($id) {
            global $BDD ; 
            $query = "SELECT * FROM modification WHERE cours_id=:id";
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(":id",$id); 
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            return $rowCount != 0; 
        }
        
    }




?>