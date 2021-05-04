<?php
    //Include i file necessari
    include("chkSession.php");
    include("connection.php");

    //Visualizza il qr
    if(isset($_GET["QR"])){
        //Parse qr code
        $qr = $_GET["QR"];
        $arr = explode(';',$qr);
        if(count($arr)==2){
            //Aggiornamento del parametro in accesso, inserimento uscita
            $sql = "UPDATE accessi SET Uscita = '" . date("Y-m-d h:i:s") . "' WHERE ID =".$arr[1]." AND Nome='".$arr[0]."'"; 
            $conn->query($sql);

            //Visualizzazione output
            echo "Uscita eseguita correttamente<br>";
            echo "Reindirizzamento automatico tra 10 secondi<br>";
            header("refresh:10;url=QRreader.php");//Redirect
        }
        else
           header("location: QRreader.php"); //Redirect
        
    }
    else
        header("location: QRreader.php");
?>