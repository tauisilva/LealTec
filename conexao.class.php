<?php

class Conexao extends Exception{

    function __construct(){

        try{

            $host = "localhost";
            $user =  "root";
            $pass = "";
            $db = "LealTec";
    
            $conn = new mysqli(host, user, pass, db);
    
        } catch (Exception $e) {
            
            throw new Exception($e->getMenssage(), 1);
            
        }
    }
}
    
?>