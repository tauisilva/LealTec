<?php
    session_start();

    if(!$_SESSION["usuario"] || empty($_SESSION["usuario"])){

        header("location: ../../index.php");
        
    }

?>