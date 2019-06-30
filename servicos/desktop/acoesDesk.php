<?php

    require_once("../../conexao.class.php");

    $acao = trim($_POST["acao"]);

    define("TABMOB", "Mobile");
    define("TABTAB", "Tablet");
    define("TABCEL", "Celular");

    switch($acao){

        case 'Deletar':
            try{
                $conn = new Conexao();

                $idDispositivo = trim($_POST["idDeletar"]);
                $dispositivo = trim($_POST["tabela"]);

                if(trim($dispositivo === "Celular")){

                    $ids =  "SELECT Mobile FROM celular".
                            " WHERE imei = '$idDispositivo'";

                    $strConsulta = $conn->Consultas($ids);
                    $row = $strConsulta->fetch_Assoc();

                    $strDeletar =   "DELETE  FROM ".TABCEL.
                                    " WHERE imei = '$idDispositivo';";

                    $strDeletar .=  "DELETE FROM ".TABMOB.
                                    " WHERE id_Mobil = '".$row["Mobile"]."';";
                }
                else{

                    $strDeletar =   "DELETE FROM ".TABTAB.
                                    " WHERE mobile = '$idDispositivo';";

                    $strDeletar .=  "DELETE FROM ".TABMOB.
                                    " WHERE id_Mobil = '".$idDispositivo."';";
                    
                }
                
                $conn->DeletarMult($strDeletar);
                
                $ret = array("error" => false);

                echo json_encode($ret);

            }catch(Exception $e){
        
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }
            
            break;

        case 'Consultar':
            try{
                $txtConsulta = trim($_POST["consulta"]);
                $dispositivo = trim($_POST["tabela"]);

                $conn = new Conexao();

                if(trim($dispositivo) === "Computador"){

                    $strConsulta =  "SELECT C.imei as id, C.pelicula, M.nome, M.carregador, M.tela, MC.marca".
                                    " FROM ".TABCEL." C".
                                    " LEFT OUTER JOIN Mobile M ON C.Mobile = M.id_mobil".
                                    " LEFT OUTER JOIN Marca MC ON M.marca = MC.id_marca".
                                    " WHERE C.pelicula LIKE '%$txtConsulta%' OR M.nome LIKE '%$txtConsulta%'".
                                    " OR M.carregador LIKE '%$txtConsulta%' OR M.tela LIKE '%$txtConsulta%'".
                                    " OR MC.marca LIKE '%$txtConsulta%'";
                
                    $pesq = $conn->Consultas($strConsulta);

                    $retRow = $pesq->fetch_All(MYSQLI_ASSOC);
                    echo json_encode($retRow);

                }else{

                    $strConsulta =  "SELECT T.mobile as id, T.tamanho, M.nome, M.carregador, M.tela, MC.marca".
                                    " FROM ".TABTAB." T".
                                    " LEFT OUTER JOIN Mobile M ON T.Mobile = M.id_mobil".
                                    " LEFT OUTER JOIN Marca MC ON M.marca = MC.id_marca".
                                    " WHERE T.tamanho LIKE '%$txtConsulta%' OR M.nome LIKE '%$txtConsulta%'".
                                    " OR M.carregador LIKE '%$txtConsulta%' OR M.tela LIKE '%$txtConsulta%'".
                                    " OR MC.marca LIKE '%$txtConsulta%'";
                
                    $pesq = $conn->Consultas($strConsulta);

                    $retRow = $pesq->fetch_All(MYSQLI_ASSOC);
                    echo json_encode($retRow);

                }

            }catch(Exception $e){
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }

            break;
        
        }

?>
