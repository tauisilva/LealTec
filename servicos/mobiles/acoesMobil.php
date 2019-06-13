<?php

    require_once("../../conexao.class.php");

    $acao = trim($_POST["acao"]);

    define("TABMOB", "Mobile");
    define("TABTAB", "Tablet");
    define("TABCEL", "Celular");

    switch($acao){

        case 'Inserir':
            try {
                $nome = trim($_POST["nome"]);
                $endereco = trim($_POST["endereco"]);
                $telefone = trim($_POST["telefone"]);
                $cpf = trim($_POST["cpf"]);

                $conn = new Conexao();
                
                $strTelefone = "INSERT INTO ".TABTELEFONE."(id_tel, numero) VALUES(DEFAULT, '$telefone');";
                $strConsulta = "SELECT MAX(id_tel) AS tel FROM ". TABTELEFONE;

                $conn->Insercao($strTelefone);
                $tel = $conn->Consultas($strConsulta);
                $tel = $tel->fetch_Assoc();

                $strPessoa = "INSERT INTO ".TABPESSOA."(id_pessoa, cpf, nome, numero) VALUES(DEFAULT, '$cpf', '$nome', '".$tel['tel']."' );";
                $strConsulta = "SELECT MAX(id_pessoa) AS pessoa FROM ". TABPESSOA;

                $conn->Insercao($strPessoa);
                $pessoa = $conn->Consultas($strConsulta);
                $pessoa = $pessoa->fetch_Assoc();
                
                $strCliente= "INSERT INTO ".TABCLIENTE."(id_cliente, pessoa, endereco) VALUES(DEFAULT, '".$pessoa['pessoa']."', '$endereco');";

                $conn->Insercao($strCliente);

            } catch (Exception $e) {
                
                $ret = array("error" => true, "message" => "Ocorreu um erro ao gravar os dados do cliente ");
                
                echo json_encode($ret);

            }

            break;
        
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

                if(trim($dispositivo) === "Celular"){

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
        
        case 'Editar':
            try {
                $idConsulta = trim($_POST["idCliente"]);
                $dispositivo = trim($_POST["table"]);
                
                $conn = new Conexao();

                if(trim($dispositivo) === "Celular"){
                    
                    $strConsulta =  "SELECT C.imei as id, C.pelicula, M.nome, M.carregador, M.tela, M.marca".
                                    " FROM celular C".
                                    " LEFT OUTER JOIN Mobile M ON C.Mobile = M.id_mobil".
                                    " WHERE C.imei = '$idConsulta'";

                }else{

                    $strConsulta =  "SELECT T.mobile AS id, T.tamanho, M.nome, M.carregador, M.tela, M.marca AS idMarca, MC.marca".
                                    " FROM Tablet T".
                                    " LEFT OUTER JOIN Mobile M ON T.Mobile = M.id_mobil".
                                    " LEFT OUTER JOIN Marca MC ON M.marca = MC.id_marca";
                                    " WHERE T.mobile = '$idConsulta'";

                }

                $result = $conn->Consultas($strConsulta);

                $row = $result->fetch_Assoc();

                
                echo json_encode($row);

            } catch (Exception $e) {
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }
            
            break;
        
        case 'Atualizar':
            try {
                $idCliente = trim($_POST["idCliente"]);
                $cpf = trim($_POST["cpf"]);
                $nome = trim($_POST["nome"]);
                $numero = trim($_POST["numero"]);
                $endereco = trim($_POST["endereco"]);

                $conn = new Conexao();

                $ids =  "SELECT P.nome AS nome, P.id_pessoa AS pessoa, T.id_tel AS telefone".
                        " FROM ".TABCLIENTE." C ".
                        " LEFT OUTER JOIN ".TABPESSOA." P ON C.pessoa = P.id_pessoa".
                        " LEFT OUTER JOIN ".TABTELEFONE." T ON P.numero = T.id_tel".
                        " WHERE C.id_cliente = '$idCliente'";

                $strConsulta = $conn->Consultas($ids);
                $row = $strConsulta->fetch_Assoc();
                
                $strAtualizar = "UPDATE ".TABCLIENTE.
                                " SET endereco = '$endereco'".
                                " WHERE id_cliente = '$idCliente';";
                $conn->Atualiza($strAtualizar);
                
                $strAtualizar = "UPDATE ".TABPESSOA.
                                " SET cpf = '$cpf', nome = '$nome'".
                                " WHERE id_pessoa = '".$row['pessoa']."';";
                $conn->Atualiza($strAtualizar);
                
                $strAtualizar = "UPDATE ".TABTELEFONE.
                                " SET numero = '$numero'".
                                " WHERE id_tel = '".$row['telefone']."';";
                $conn->Atualiza($strAtualizar);
                
                $strConsulta =  "SELECT C.id_cliente AS id, P.cpf, P.nome, T.numero, C.endereco FROM cliente C".
                                " LEFT OUTER JOIN Pessoa P ON C.pessoa = P.id_pessoa".
                                " LEFT OUTER JOIN Telefone T ON P.numero = T.id_tel;";
                
                $pesq = $conn->Consultas($strConsulta);

                $retRow = $pesq->fetch_All(MYSQLI_ASSOC);

                echo json_encode($retRow);

            } catch (Exception $e) {
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }
            
            break;
    }

?>
