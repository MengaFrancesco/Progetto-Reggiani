<?php
    include("chkSession.php");
    
    if($_SESSION["ID"] == "" && $_SESSION["username"] == "" && $_SESSION["Admin"] == "")
        echo "KO";
    else
        echo "OK";
?>