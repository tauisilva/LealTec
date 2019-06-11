<?php

class Conexao extends Exception{

    private $strConn;
    
    function __construct(){

        try{

            $host = "localhost";
            $user =  "root";
            $pass = "";
            $db = "LealTec";
            
            $this->strConn = new mysqli($host, $user, $pass, $db);
            $this->strConn->query('SET character_set_results=utf8');
            $this->strConn->query("SET NAMES 'utf8'");

        } catch (Exception $e) {
            
            throw new Exception("Erro ao estabelecer conexão com o banco", 1);
            
        }
    }

    
    function Consultas($sql){
        try{

            return $this->strConn->query($sql);

        }catch(Exception $e){
            
            throw new Exception("Erro ao tentar realizar a consulta", 1);
            
        }
        
    }
    function Insercao($sql){
        try{

            $this->strConn->query($sql);
            return true;

        }catch(Exception $e){
            
            throw new Exception("Erro ao tentar realizar a consulta", 1);
            
        }
        
    }
    function Deletar($sql){
        try {
            
            $this->strConn->query($sql);
            return true;

        } catch (Exception $e) {

            throw new Exception("Erro ao tentar realizar exclusão", 1);
            
        }
    }
    function DeletarMult($sql){
        try {
            
            $this->strConn->multi_query($sql);
            return true;

        } catch (Exception $e) {
            throw new Exception("Erro ao tentar realizar exclusão", 1);
        }
    }
    function Atualiza($sql){
        try{

            return $this->strConn->query($sql);

        }catch(Exception $e){
            
            throw new Exception("Erro ao tentar realizar a operação", 1);
            
        }
    }
}
    
?>