<?php

if(!$_SESSION["nome"] || empty("nome")){

    header("location: index.php");
    exit();
}

?>