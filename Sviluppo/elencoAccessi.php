<?php
include("chkSession.php");
include("connection.php");

//Controllo login effettuato
if($_SESSION["ID"] == "" && $_SESSION["username"] == "" && $_SESSION["Admin"] == "")
	header("location: index.php");

function stampaAccessi($conn){
//Query per il recupero degli accessi
$sql = "SELECT * FROM accessi";
$result = $conn -> query($sql);

echo "<table  class='table'>";

if($result->num_rows > 0){
	
	//Intestazione della tabella
	echo "<thead><tr>";
	echo "<td>ID</td>";
	echo "<td>Nome</td>";
	echo "<td>Cognome</td>";
	echo "<td>Azienda</td>";
	echo "<td>Referente</td>";
	echo "<td>Telefono</td>";
	echo "<td>Mail</td>";
	echo "<td>Ingresso</td>";
	echo "<td>Uscita</td>";
	if($_SESSION["Admin"])
		echo "<td>Elimina</td>";
	echo "</tr></thead><tbody>";
	
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
		echo "<td>".$row["Uscita"]."</td>";
		if($_SESSION["Admin"])
			echo "<td><a href='eliminaAccesso.php?ID=".$row["ID"]."'>X</a></td>";
		echo "</tr>";
        }
    }

echo "</tbody></table>";
}
?>

<style>
	.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>
		
		
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Elenco accessi:</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>

<?php
	stampaAccessi($conn);
?>

</div>
    </div>
</div>