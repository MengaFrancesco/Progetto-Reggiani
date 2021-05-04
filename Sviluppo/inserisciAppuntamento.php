<?php

include("chkSession.php");
include("connection.php");

    //Esecuzione query di inserimento appuntamento
    $sql = "INSERT INTO appuntamenti(ID, Ora, Giorno, Azienda, Nome, Referente, NomeUfficio)";
    $sql.= " VALUES (NULL,'".$_POST["nameTime"].":00','".$_POST["nameDate"]."','".$_POST["nameAzienda"]."'";
    $sql .=",'".$_POST["nameNome"]."','".$_POST["nameReferente"]."','".$_POST["nameUfficio"]."')";
    $conn -> query($sql);

    header("location: elencoAppuntamenti.php"); //Redirect

?>