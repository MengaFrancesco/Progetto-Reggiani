<?php
include("chkSession.php");
include("connection.php");


function stampaAppuntamenti($conn){

//Query per il recupero degli accessi
$sql = "SELECT * FROM appuntamenti";
$result = $conn -> query($sql);

echo "<table>";

if($result->num_rows > 0){
	
	//Intestazione della tabella
	echo "<tr>";
	echo "<td>ID</td>";
	echo "<td>Ora</td>";
	echo "<td>Giorno</td>";
	echo "<td>Azienda</td>";
	echo "<td>Nome</td>";
	echo "<td>Referente</td>";
	echo "<td>NomeUfficio</td>";
	echo "</tr>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Ora"]."</td>";
		echo "<td>".$row["Giorno"]."</td>";
		echo "<td>".$row["Azienda"]."</td>";
		echo "<td>".$row["Nome"]."</td>";
		echo "<td>".$row["Referente"]."</td>";
		echo "<td>".$row["NomeUfficio"]."</td>";
		echo "</tr>";
        }
    }

echo "</table>";
}

stampaAppuntamenti($conn);
?>

<style>
            table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
  padding-left: 25px;
  padding-right: 25px;
}
        </style>

