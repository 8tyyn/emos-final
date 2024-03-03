<?php
session_start();
session_unset();
session_destroy();
header("Location:  /WEBSITE/EMOS/src/admin/pages/loginAdmin.php");
?>