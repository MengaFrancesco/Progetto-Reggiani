<?php
	//Include i file necessari
	include("connection.php");
	include("chkSession.php");
	
	//Cancella i dati dell'utente nella sessione
	
	//Ritorno alla finestra di login
	header("location: index.php");
?>	