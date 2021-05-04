<?php
//Include file di controllo della sessione e della connessione
include("chkSession.php");
include("connection.php");

//Recupero di username e password
$username = $_POST["nameUsername"];
$password = $_POST["namePassword"];
// Cripta la password
$password = MD5($password);
//Inizializzazione della query e salvataggio del risultato
$sql = "SELECT * FROM utenti WHERE Username=\"".$username."\" AND Password=\"".$password."\"";
$result = $conn->query($sql);

if ($result->num_rows > 0) { //Se presente almeno una riga
    //LOGIN CORRETTO
    // Salva le informazioni dell'utente nella sessione
    $row = $result->fetch_assoc();
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["username"] = $row["Username"];
    $_SESSION["Admin"]= $row["Admin"];
    //Apertura della pagina principale
    header("location: dashboard.php");
} else { //LOGIN ERRATO
    //Ritorna alla pagina di login con messaggio di errore
    header("location: index.php?msg=Login Errato!");
}

// Chiusura della connessione
$conn->close();
?>