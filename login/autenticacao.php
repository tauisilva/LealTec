<?php

    session_start();
    include_once("../conexao.class.php");

    $conn = new Conexao();

    if(empty($_POST["email"]) || empty($_POST["senha"])  ){

        print "<script>alert('Usuario e/ou senha vazio'); location.href = '../index.php';</script>";
        exit();

    }

    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $strQuery = "SELECT * FROM Funcionario WHERE email = '$email' AND senha = MD5('$senha')";

    $res = $conn->Consultas($strQuery);

    $row = $res->num_rows;

    if($row == 1){
        
        $res = $res->fetch_assoc();
        $_SESSION["usuario"] = $res["nome"];
        print $_SESSION["usuario"];
        header("location: ../funcionario/admin/index.php");
        exit();
    }
    else{

        print "<script>alert('Usuario ou senha incorreto, tente novamente mais tarde'); location.href = '../index.php';</script>";
        exit();
    }

?>