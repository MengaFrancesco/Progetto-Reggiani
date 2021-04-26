<?php
	include("chkSession.php");
?>


<style>

</style>
<div class="divMenu">
	<img src="http://www.reggiani.net/wp-content/themes/Reggiani/images/logo-grigio-new.svg"/>
</div>
<br><br>
<div class="divCenter">

<form action="accesso.php" method="post">
    <input type="submit" value="Inserimento Accessi" /><br>
</form>

<form action="elencoAppuntamenti.php" method="post">
    <input type="submit" value="Elenco Appuntamenti" /><br>
</form>

<form action="elencoAccessi.php" method="post">
    <input type="submit" value="Elenco Accessi" /><br>
</form>

<form action="QRreader.php" method="post">
    <input type="submit" value="Lettore codici QR" /><br>
</form>

</div>