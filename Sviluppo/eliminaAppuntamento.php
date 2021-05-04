<?php

include("chkSession.php");
include("connection.php");

    if(isset($_GET["ID"])){
        $sql = "DELETE FROM appuntamenti WHERE ID = ".$_GET["ID"];
        $conn -> query($sql);
    }
    
    header("location: elencoAppuntamenti.php");

?>