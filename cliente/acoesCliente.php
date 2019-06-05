<?php

    include_once("../conexao.class.php");

    $acao = trim($_POST["acao"]);

    define("TABCLIENTE", "Cliente");
    define("TABPESSOA", "Pessoa");
    define("TABTELEFONE", "Telefone");
    switch($acao){

        case 'Inserir':
            //code
            break;
        
        case 'Deletar':
            try{
                $conn = new Conexao();

                $idCliente = trim($_POST["idDeletar"]);
                
                $ids =  "SELECT C.id_cliente AS cliente, P.nome AS nome, P.id_pessoa AS pessoa, T.id_tel AS telefone".
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
                
                $ret = array("error" => false, "usuario" => $row["nome"] );

                echo json_encode($ret);
                
            }catch(Exception $e){
        
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }
            
            break;

        case 'Consultar':    
            try{
                $txtConsulta = trim($_POST["consulta"]);

                $conn = new Conexao();

                $strConsulta =  "SELECT C.id_cliente AS id, P.cpf, P.nome, T.numero, C.endereco FROM cliente C".
                                " LEFT OUTER JOIN Pessoa P ON C.pessoa = P.id_pessoa".
                                " LEFT OUTER JOIN Telefone T ON P.numero = T.id_tel".
                                " WHERE P.nome LIKE '%$txtConsulta%' OR P.cpf LIKE '%$txtConsulta%'".
                                " OR T.numero LIKE '%$txtConsulta%' OR C.endereco LIKE '%$txtConsulta%'";
                
                $pesq = $conn->Consultas($strConsulta);

                $retRow = $pesq->fetch_assoc();

                echo json_encode($retRow);

            }catch(Exception $e){
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }

            break;
    }

?>