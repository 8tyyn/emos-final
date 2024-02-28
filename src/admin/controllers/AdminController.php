<?php
require_once "UserController.php";
$servername = "localhost";
$serveruser = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=emos";
try {
    $BDD = new PDO($dsn, $serveruser, $password);
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}
    class AdminController {
        private $userController;
            public function __construct() {
                $this->userController = new UserController();
            }
        public function getAdminCount() {
            try {
                global $BDD ; 
            $qurey = "SELECT COUNT(*) AS 'COUNT' FROM vc_users_admin"; 
            $stmnt = $BDD->prepare($qurey);
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            if ($rowCount == 0)
                return null;
            $res = $stmnt->fetch(PDO::FETCH_ASSOC);
            return $res;
            }
            catch(Exception $e) {
                return null ; 
            }
        }
        public function getAdmins() {
            try {
                global $BDD ; 
            $qurey = "SELECT * FROM vc_users_admin"; 
            $stmnt = $BDD->prepare($qurey);
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            // if ($rowCount == 0)
            //     return [];
            $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
            }
            catch(Exception $e) {
                return [] ; 
            }
        }
        public function getAdmin($email) {
            global $BDD ; 
            $query = "SELECT * FROM vc_users_admin WHERE email=:email"; 
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(":email",$email); 
            $stmnt->execute();
            $res = $stmnt->fetch(PDO::FETCH_ASSOC);
            return $res ; 
        }
        public function create($name,$lastname,$email,$password,$tel,$adress,$isSup) {
            try{
                global $BDD; 
            $this->userController->create($name,$lastname,$email,$password,$tel,$adress);
            $query = "INSERT INTO admin VALUES(:email,:isSup)"; 
            $stmnt = $BDD->prepare($query); 
            $stmnt->bindParam(':email',$email); 
            $stmnt->bindParam(':isSup',$isSup); 
            $stmnt->execute();
            $rowCount = $stmnt->rowCount(); 
            return $rowCount!=0; 
            }
            catch(Exception $e) {
                echo $e ; 
            }
        }

        public function deleteAdmin($email) {
            try{
                global $BDD;
            $query = "DELETE FROM admin where email=:email";
            $stmnt = $BDD->prepare($query);
            $stmnt->bindParam(':email',$email); 
            $stmnt->execute(); 
            $this->userController->deleteUser($email);
            return true;
            }
            catch(Exception $e) {
            return false; 
            }
        }
        
    }

?>