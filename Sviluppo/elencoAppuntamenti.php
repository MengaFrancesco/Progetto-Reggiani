<?php
include("chkSession.php");
include("connection.php");

//Controllo login effettuato
if($_SESSION["ID"] == "" && $_SESSION["username"] == "" && $_SESSION["Admin"] == "")
	header("location: index.php");


function stampaAppuntamenti($conn){

//Query per il recupero degli accessi
$sql = "SELECT * FROM appuntamenti";
$result = $conn -> query($sql);

echo "<table  class='table'>";

if($result->num_rows > 0){
	
	//Intestazione della tabella
	echo "<thead><tr>";
	echo "<td>ID</td>";
	echo "<td>Ora</td>";
	echo "<td>Giorno</td>";
	echo "<td>Azienda</td>";
	echo "<td>Nome</td>";
	echo "<td>Referente</td>";
	echo "<td>Nome Ufficio</td>";
	if($_SESSION["Admin"])
		echo "<td>Elimina</td>";
	echo "</tr></thead><tbody>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["ID"]."</td>";
		echo "<td>".$row["Ora"]."</td>";
		echo "<td>".$row["Giorno"]."</td>";
		echo "<td>".$row["Azienda"]."</td>";
		echo "<td>".$row["Nome"]."</td>";
		echo "<td>".$row["Referente"]."</td>";
		echo "<td>".$row["NomeUfficio"]."</td>";
		if($_SESSION["Admin"])
			echo "<td><a href='eliminaAppuntamento.php?ID=".$row["ID"]."'>X</a></td>";
		echo "</tr>";
        }
    }

echo "</tbody></table>";
}


?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Elenco appuntamenti:</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>

<?php
	stampaAppuntamenti($conn);
?>

</div>
    </div>
</div>

<div class="container">
	<div class="row">
    	<div class="container" style="width:500px" id="formContainer">

          <form class="form-signin" id="login" role="form" action="inserisciAppuntamento.php" method="post">
            <h3 class="form-signin-heading">Inserimento appuntamento:</h3>
            <input type="time" name="nameTime" class="form-control" placeholder="Ora"/><br>
			<input type="date" name="nameDate" class="form-control" placeholder="Giorno" style="height:60px;"/><br>
			<input type="text" name="nameAzienda" class="form-control" placeholder="Azienda"/><br>
			<input type="text" name="nameNome" class="form-control" placeholder="Nome"/><br>
			<input type="text" name="nameReferente" class="form-control" placeholder="Referente"/><br>
			<input type="text" name="nameUfficio" class="form-control" placeholder="Nome ufficio"/><br>
			<input type="submit" value="Inserisci appuntamento" class="btn btn-lg btn-primary btn-block"/><br>
		  </form>
    

        </div> <!-- /container -->
	</div>
</div>

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

