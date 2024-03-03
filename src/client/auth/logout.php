<?php
session_start();
session_unset();
session_destroy();
header("Location:  /WEBSITE/EMOS/src/client/pages/login.html");
?>