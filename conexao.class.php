<?php

class Conexao extends Exception{

    private $strConn;
    
    function __construct(){

        try{

            $host = "localhost";
            $user =  "root";
            $pass = "";
            $db = "LealTec";
    
            @$this->strConn = new mysqli($host, $user, $pass, $db);
    
        } catch (Exception $e) {
            
            throw new Exception($e->getMenssage(), 1);
            
        }
    }

    function Consultas($sql){

        return $this->strConn->query($sql);
        
    }
}
    
?>