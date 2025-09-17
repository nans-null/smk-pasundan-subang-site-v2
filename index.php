<?php
    error_reporting(0);
    
    if($_COOKIE['id']!="")
    {
        include("dashboard.php");
    }
    else
    {
        include("stocker-home.php");
    }

?>


