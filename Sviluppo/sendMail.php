<?php

/**
	EMAIL e password
	
	Outlook: reggianiaccessi@outlook.it ; pw: reggiani.2021
	Sendinblue: reggianiaccessi@outlook.it ; pw: reggiani.2021 (o con prima maiuscola)
	Altervista: reggianiaccessi@outlook ; pw : ?
*/

include 'Libraries/Mailin.php';

$mailin = new Mailin('https://api.sendinblue.com/v2.0','gn8p0JaBCTQmcsxS');
/*
 * This will send a transactional email
 *
 */
/** Prepare variables for easy use **/ 

$codice = "codice";
$codice = iconv('UTF-8', 'ISO-8859-1', $codice);

$data = array( "to" => array("ReggianiAccessi@outlook.it"=>""),
			//"cc" => array("cc@example.net"=>"cc whom!"),
			//"bcc" =>array("bcc@example.net"=>"bcc whom!"),
			"from" => array("ReggianiAccessi@outlook.it","Reggiani Gestione Accessi"),
			"replyto" => array("ReggianiAccessi@outlook.it","Rispondi a questa mail"),
			"subject" => "Oggetto della mail di esempio",
			"text" => "Contenuto della mail contenuto della mail",
			"html" => "<!DOCTYPE html>
					   <html>
					   <h1>Gestione accessi</h1>
					   <p>Gentile cliente \"Nome cliente\", l'accesso è stato eseguito con successo.</p>
					   <p>Si prega di utilizzare il codice qr fornito in allegato per eseguire l'uscita prima di lasciare la struttura:</p>
					   <img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=". $codice ."\" title=\"Codice di accesso\" />
					   </html>",
			"attachment" => array(),
			
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag"),
			//"inline_image" => array('myinlineimage1.png' => "your_png_files_base64_encoded_chunk_data",'myinlineimage2.jpg' => "your_jpg_files_base64_encoded_chunk_data")
);

$mailin->send_email($data);

echo "<img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=". $codice ."\" title=\"Codice di accesso\" />"

?>