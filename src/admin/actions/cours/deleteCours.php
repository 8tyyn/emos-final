<?php
    require_once  "../../controllers/CoursController.php";
    $coursController = new CoursController();
    $id = $_GET['id'];
    if($coursController->deleteCours($id)) {
        header("location: ../../pages/dashboard/CoursControl.php");
    }
    else {
        echo "CANNOT DELTE COURSE MF";
    }
?>