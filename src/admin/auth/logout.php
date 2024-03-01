<?php
session_start();
session_unset();
session_destroy();
header("Location:  /emos-final/src/admin/pages/loginAdmin.php");
?>