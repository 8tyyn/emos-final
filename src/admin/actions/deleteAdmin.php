<?php 
require_once "../controllers/AdminController.php"; 
$admin = new AdminController() ;  
        $email = $_GET['email']; 
        if ($admin->deleteAdmin($email)) {
            echo "HOLA AMIGO"; 
            header("location: ../pages/dashboard/AdminControl.php");
        } else {
            // Handle deletion error
            echo "Error deleting admin";
        }
    
?>