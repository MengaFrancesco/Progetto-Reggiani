<?php

include("chkSession.php");
include("connection.php");

    //Esecuzione query di inserimento appuntamento
    $sql = "INSERT INTO appuntamenti(ID, Ora, Giorno, Azienda, Nome, Referente, NomeUfficio, email)";
    $sql.= " VALUES (NULL,'".$_POST["nameTime"].":00','".$_POST["nameDate"]."','".$_POST["nameAzienda"]."'";
    $sql .=",'".$_POST["nameNome"]."','".$_POST["nameReferente"]."','".$_POST["nameUfficio"]."','".$_POST["nameEmail"]."')";
    $conn -> query($sql);

    header("location: elencoAppuntamenti.php"); //Redirect

?>