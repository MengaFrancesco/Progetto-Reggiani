<?php
include("chkSession.php");
include("connection.php");


function stampaAccessi($conn){
//Query per il recupero degli accessi
$sql = "SELECT * FROM accessi";
$result = $conn -> query($sql);

echo "<table>";

if($result->num_rows > 0){
	
	//Intestazione della tabella
	echo "<tr>";
	echo "<td>ID</td>";
	echo "<td>Nome</td>";
	echo "<td>Cognome</td>";
	echo "<td>Azienda</td>";
	echo "<td>Referente</td>";
	echo "<td>Telefono</td>";
	echo "<td>Mail</td>";
	echo "<td>Orario</td>";
	echo "</tr>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Nome"]."</td>";
		echo "<td>".$row["Cognome"]."</td>";
		echo "<td>".$row["Azienda"]."</td>";
		echo "<td>".$row["Referente"]."</td>";
		echo "<td>".$row["Telefono"]."</td>";
		echo "<td>".$row["Mail"]."</td>";
		echo "<td>".$row["Orario"]."</td>";
		echo "</tr>";
        }
    }

echo "</table>";
}

stampaAccessi($conn);
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

