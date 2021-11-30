<?php
    if(isset($_GET["idokiiras"]) && $_GET["idokiiras"]=="per"){
        echo date('G/i/s');
    } else if(isset($_POST["idokiiras"]) && $_POST["idokiiras"]=="kotojel") {
        echo date('G-i-s');
    } else {
        echo date('G:i:s');
    }
   
?>