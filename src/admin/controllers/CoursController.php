<?php 
require_once "ModificationController.php"; 
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
    class CoursController {
        private $modificationController  ; 
        public function __construct() {
            $this->$modificationController=new ModificationController(); 
        }
        public function getAllCours() {
            global $BDD; 
            $query = "SELECT * FROM cours"; 
            $stmnt = $BDD->prepare($query);
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            return $res ; 
        }
        public function deleteCours($id) {
            global $BDD;
            $query = "DELETE FROM cours WHERE id=:id";  
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(":id",$id); 
            $stmnt->execute();
            return $stmnt->rowCount()!=0 ; 
        }
        public function modifyCours($id , $title,$content,$admin_id) {
            global $BDD; 
            $query = "UPDATE cours SET title=:title,content=:content WHERE id=:id"; 
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(":id",$id); 
            $stmnt->bindParam(":title",$title); 
            $stmnt->bindParam(":content",$content); 
            $stmnt->execute();
            $modificationController->registerModification($id,$admin_id); 
            return $stmnt->rowCount()!=0 ; 
        }
        public function getSingleCours($id) {
            global $BDD; 
            $query = "SELECT * FROM cours WHERE id=:id"; 
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(":id",$id); 
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            return $res ; 
        }
        public function create($title , $content ,$admin_id) {
            global $BDD ;
            $query = "INSERT INTO cours VALUES(:title,:content,:written_by,:created_at,:updated_at)"; 
            $stmnt = $BDD->prepare($query); 
            $stmnt->bindParam(":title",$title);
            $stmnt->bindParam(":content",$content);
            $stmnt->bindParam(":written_by",$written_by);
            $stmnt->bindParam(":created_at",date("Y-m-d"));
            $stmnt->bindParam(":updated_at",date("Y-m-d"));
            $stmnt->execute();
            $rowCount = $stmnt->rowCount(); 
            return $rowCount!=0 ; 
        }
        

    }




?>