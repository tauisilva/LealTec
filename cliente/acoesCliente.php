<?php

    include_once("../conexao.class.php");

    $acao = trim($_POST["acao"]);

    define("TABCLIENTE", "Cliente");
    define("TABPESSOA", "Pessoa");
    define("TABTELEFONE", "Telefone");
    switch($acao){

        case 'Inserir':
            try {
                $nome = trim($_POST["nome"]);
                $endereco = trim($_POST["endereco"]);
                $telefone = trim($_POST["telefone"]);
                $cpf = trim($_POST["cpf"]);

                $conn = new Conexao();
                
                /*
                $strConsulta = "SELECT * FROM ".TABPESSOA.
                " WHERE cpf = '$cpf'";

                if($strConsulta->num_rows() >= 1){

                    $ret = array("error" => true, "message" => "O CPF informado já existe na base de dados");

                    echo json_encode($ret);
                    die();
                    
                }
                */
                
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

                $retRow = $pesq->fetch_All(MYSQLI_ASSOC);
                echo json_encode($retRow);

            }catch(Exception $e){
                $ret = array("error" => true, "message" => $e->getMessage());
                
                echo json_encode($ret);
            }

            break;
    }

?>
