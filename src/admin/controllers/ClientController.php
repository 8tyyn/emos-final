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
    class ClientController {
        public function getStudentCount($clients) {
            $count = 0 ; 
            foreach ($clients as $client) {
        
                if($client['isStudent']=='1') $count++; 
            }
            return $count ; 
        }
        public function getTeacherCount($clients) {
            $count = 0 ; 
            foreach ($clients as $client) {
          
                if($client['isStudent']=='0') $count++; 
            }
            return $count ; 
        }
        public function getClients() {
            try {
                global $BDD ; 
            $qurey = "SELECT * FROM vc_users_client"; 
            $stmnt = $BDD->prepare($qurey);
            $stmnt->execute();
            $rowCount = $stmnt->rowCount();
            if ($rowCount == 0)
                return [];
            $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
            }
            catch(Exception $e) {
                return [] ; 
            }
        }
        // Array 1 : Students | Array 2 : Teachers 
        public function getClientsByType($clients) {
            $students = array(); 
            $teachers = array(); 
            foreach ($clients as $client ) {
                $client['isStudent']=='1' ? array_push($students,$client) : array_push($teachers,$client); 
            }
            return [$students,$teachers]; 
        }
    }

?>