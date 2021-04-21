<?php
/**
 EMAIL e password
 Outlook: reggianiaccessi@outlook.it ; pw: reggiani.2021
 Sendinblue: reggianiaccessi@outlook.it ; pw: reggiani.2021 (o con prima maiuscola)
 Altervista: reggianiaccessi@outlook ; pw : ?
 */

include 'Libraries/Mailin.php';
include 'chkSession.php';

$mailin = new Mailin('https://api.sendinblue.com/v2.0', 'gn8p0JaBCTQmcsxS');
/*
 * This will send a transactional email
 *
*/
/** Prepare variables for easy use **/

$codice = "codice";
$codice = iconv('UTF-8', 'ISO-8859-1', $codice);

$nome = $_POST["nameNome"];
$cognome = $_POST["nameCognome"];
$azienda = $_POST["nameAzienda"];
$referente = $_POST["nameReferente"];
$telefono = $_POST["nameTelefono"];
$mail = $_POST["nameMail"];
$info = file_get_contents('informativaPrivacy.php');
$giorno = date("Y-m-d");
$ora = date("h:i:s");

//$data = array( "to" => array("ReggianiAccessi@outlook.it"=>""),
$data = array(
    "to" => array(
        $mail => ""
    ) ,
    //"cc" => array("cc@example.net"=>"cc whom!"),
    //"bcc" =>array("bcc@example.net"=>"bcc whom!"),
    "from" => array(
        "ReggianiAccessi@outlook.it",
        "Reggiani Gestione Accessi"
    ) ,
    "replyto" => array(
        "ReggianiAccessi@outlook.it",
        "Rispondi a questa mail"
    ) ,
    "subject" => "Accesso inserito",
    //"text" => "Contenuto della mail contenuto della mail",
    "html" => "<!DOCTYPE html>
					   <html>
					   <h2>Gestione automatica degli accessi</h2>
					   <p>Gentile cliente " . $nome . " " . $cognome . ", l'accesso è stato eseguito con successo.</p>
					   <p>Le infomazioni da lei fornite sono le seguenti:<br>
					   Azienda: " . $azienda . " <br>
					   Referente: " . $referente . " <br>
					   Telefono: " . $telefono . "<br>
					   Data: ".$giorno."<br>
					   Ora: ".$ora."<br>
					   </p>
					   <p>Si prega di utilizzare il codice qr fornito in allegato per eseguire l'uscita prima di lasciare la struttura:</p>
					   <img style='text-align:center;' src=\"https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=" . $codice . "\" title=\"Codice di accesso\" />
					   <br>
					   <h3>INFORMATIVA EX ART. 13 DEL D.LGS. N. 196/2003</h3> <br>
						Gentile Signore/a, <br>
						Desideriamo informarLa che il D.Lgs. n. 196 del 30 giugno 2003 (“Codice in materia di protezione <br>
						dei dati personali”) prevede la tutela delle persone e di altri soggetti rispetto al trattamento dei <br> 
						dati personali. <br>
						Secondo la normativa indicata, tale trattamento sarà improntato ai principi di correttezza, liceità <br> 
						e trasparenza e di tutela della Sua riservatezza e dei Suoi diritti. <br> 
						Ai sensi dell’articolo 13 del D.Lgs. n. 196/2003, pertanto, Le forniamo le seguenti informazioni: <br>
						1. I dati da Lei forniti verranno trattati per le seguenti finalità: memorizzazione accessi alla struttura <br>
						2. Il trattamento sarà effettuato con le seguenti modalità: informatizzato <br>
						3. Il conferimento dei dati è facoltativo obbligatorio (se obbligatorio, specifcare il motivo <br>
						dell’obbligo _____________________ ) e l’eventuale rifuto di fornire tali dati non ha alcuna <br>
						conseguenza potrebbe comportare la mancata o parziale esecuzione del contratto la <br>
						mancata prosecuzione del rapporto. <br>
						4. I dati non saranno comunicati ad altri soggetti, né saranno oggetto di diffusione o <br>
						 i dati potranno essere/saranno comunicati a: _____________ o diffusi presso: ____________ <br>
						(Scegliere l’opzione in funzione del trattamento ed indicare, se presente, l’ambito di <br>
						comunicazione e/o diffusione). <br>
						Se nel trattamento sono coinvolti anche dati sensibili, occorre integrare la dichiarazione: <br>
						Il trattamento riguarderà anche dati personali rientranti nel novero dei dati “sensibili”, vale a <br>
						dire dati idonei a rivelare l’origine razziale ed etnica, le convinzioni religiose, flosofche o <br> 
						di altro genere, le opinioni politiche, l’adesione a partiti, sindacati, associazioni od <br> 
						organizzazioni a carattere religioso, flosofco, politico o sindacale, nonché i dati personali <br> 
						idonei a rivelare lo stato di salute e la vita sessuale. I dati sanitari potranno essere trattati da<br>
						centri medici specializzati nel valutare l’idoneità al lavoro. (Scegliere la categoria che interessa).<br>
						Il trattamento che sarà effettuato su tali dati sensibili ha le seguenti fnalità: ___________________<br>
						sarà effettuato con le seguenti modalità: ___________________________________________<br>
						I dati in questione non saranno comunicati ad altri soggetti né saranno oggetto di diffusione o<br>
						 i dati potranno essere/saranno comunicati a: _____________, o diffusi presso: ______________<br>
						(Scegliere l’opzione a seconda delle caratteristiche del trattamento e indicare, se presente,<br>
						l’ambito di comunicazione e/o diffusione, fermo restando il divieto relativo ai dati idonei a<br>
						rivelare lo stato di salute, di cui all’art. 26, comma 5, del D.Lgs. n. 196/2003).<br>
						La informiamo che il conferimento di questi dati è facoltativo obbligatorio (se obbligatorio,<br>
						specifcare il motivo dell’obbligo _____________________ ) e l’eventuale rifuto di fornire tali<br>
						dati non ha alcuna conseguenza potrebbe comportare la mancata o parziale esecuzione<br>
						del contratto la mancata prosecuzione del rapporto.<br>
						5. Il titolare del trattamento è: _______________________________________________________<br>
						(Indicare la denominazione o la ragione sociale e il domicilio, la residenza o la sede del titolare)<br>
						6. Il responsabile del trattamento è ___________________________________________________<br>
						(indicare almeno un responsabile, e, se designato ai fni di cui all’art.7 del D.Lgs. n. 196/2003,<br>
						indicare tale responsabile del trattamento; indicare, inoltre, il sito della rete di comunicazione o<br>
						le modalità attraverso le quali è altrimenti conoscibile in modo agevole l’elenco aggiornato dei<br>
						responsabili)<br>
						7. In ogni momento potrà esercitare i Suoi diritti nei confronti del titolare del trattamento, ai sensi<br>
						dell’art. 7 del D.Lgs. n. 196/2003.
						</div>
					   
					   </html>",
    "attachment" => array() ,

    "headers" => array(
        "Content-Type" => "text/html; charset=iso-8859-1",
        "X-param1" => "value1",
        "X-param2" => "value2",
        "X-Mailin-custom" => "my custom value",
        "X-Mailin-IP" => "102.102.1.2",
        "X-Mailin-Tag" => "My tag"
    ) ,
    //"inline_image" => array('myinlineimage1.png' => "your_png_files_base64_encoded_chunk_data",'myinlineimage2.jpg' => "your_jpg_files_base64_encoded_chunk_data")
    
);

$mailin->send_email($data);

echo "<img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $codice . "\" title=\"Codice di accesso\" />"

?>
