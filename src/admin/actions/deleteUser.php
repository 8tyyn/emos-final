<?php 
require_once "../../controllers/ClientController.php";
$client = new ClientController() ;  
        $email = $_GET['email']; 
        if ($client->deleteClient($email)) {
            echo "HOLA AMIGO"; 
            header("location: ../pages/dashboard/UserControl.php");
        } else {
            // Handle deletion error
            echo "Error deleting admin";
        }
    
?>