<?php
	include("chkSession.php");
?>

<style>
*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
h4, h1, h2 {
  color: #7ed321;
  text-align: center;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #7ed321;
  color: #fff;
  border-color: #64ac15;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}


</style>

<div class="container">
  <form  method="GET" action="inserisciAccesso.php">
    <div class="row">
      <h1>Nuovo Appuntamento</h1>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Nome"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Cognome"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Azienda"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Referente"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Telefono"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Mail" name="nameMail"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  <div>
		<p>Orario di arrivo: <span id="datetime"></span></p>

		<script>
			var dt = new Date();
			document.getElementById("datetime").innerHTML = dt.toLocaleString();
		</script>
	  </div>
    </div>
    <div class="row">
      <h4>Termini e Condizioni</h4>
      <div class="input-group">
        <input id="terms" type="checkbox"/>
        <label for="terms"> Autorizzo il trattamento dei dati personali</label>
		<br>
		<input id="visModulo"  type="button" value="Visualizza modulo"/>
		<br><br>
		<input id="termina"  type="submit" value="Inserisci Accesso"/>
		<br>
		<br>
		<input id="indietro"  type="button" value="Torna indietro"/>
      </div>
    </div>
  </form>
</div>

<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://sourceforge.net/projects/phpqrcode/" title="Link to Google.com" />