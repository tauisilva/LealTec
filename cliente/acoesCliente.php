<?php

    include_once("../conexao.class.php");

    $acao = trim($_POST["acao"]);

    define("TABCLIENTE", "Cliente");
    define("TABPESSOA", "Pessoa");
    define("TABTELEFONE", "Telefone");
    switch($acao){

        case 'Deletar':
            try{
                $conn = new Conexao();

                $idCliente = trim($_POST["idDeletar"]);
                
                $ids =  "SELECT C.id_cliente AS cliente, P.id_pessoa AS pessoa, T.id_tel AS telefone".
                        " FROM ".TABCLIENTE." C ".
                        " LEFT OUTER JOIN ".TABPESSOA." P ON C.pessoa = P.id_pessoa".
                        " LEFT OUTER JOIN ".TABTELEFONE." T ON P.numero = T.id_tel".
                        " WHERE C.id_cliente = '$idCliente'";

                $strConsulta = $conn->Consultas($ids);
                $row = $strConsulta->fetch_Assoc();

                $strDeletar =    "DELETE  FROM ".TABCLIENTE.
                                    " WHERE id_cliente = '$idCliente';";
                $strDeletar .=        "DELETE FROM ".TABPESSOA.
                                    " WHERE id_pessoa = '".$row['pessoa']."';";
                $strDeletar .=        "DELETE FROM ".TABTELEFONE.
                                    " WHERE id_tel = '".$row['telefone']."';";
                
                $conn->DeletarMult($strDeletar);
                
                return true;
            }catch(Exception $e){
        
                throw new Exception("Erro ao realizar a consulta", 1);
                
            }
            break;
    }

?>