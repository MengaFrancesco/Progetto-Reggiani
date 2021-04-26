<?php
//Inizializzazione parametri della connessione
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db accessi";
//Creazione dell'oggetto connessione
$conn = new mysqli($servername, $username, $password, $dbname);
//Controllo esito della connessione
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>