<?php

class Conexao{

    function __constructor(){

        $this->ConectaDB();

    }

    private function ConectaDB(){

        try {
            
            define("host","localhost");
            define("user","root");
            define("pass","");
            define("db","LealTec");
    
            $conn = new mysqli(host, user, pass, db);
    
            return $conn;

        } catch (Exception $e) {
            
            $e->getMenssagem();

        }

    }

}
    
?>