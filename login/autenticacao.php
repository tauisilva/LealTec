<?php

session_start();
include_once("../conexao.class.php");

$conn = new Conexao();

if(empty($_POST["email"]) || empty($_POST["senha"])  ){
    header("location: ../index.php");
    exit();

}

$email = mysqli_real_escape_string(trim($_POST["email"]));
$senha = mysqli_real_escape_string(trim($_POST["senha"]));

$strQuery = "SELECT id_func, nome FROM Funcionario WHERE {'$email'} AND MD5({'$senha'})";

$res = $conn->Consultas($strQuery);

if($row === 1){

    $_SESSION['usuario'] = $res["nome"];
    header("location: ../funcionario/admin/index.php");
    exit();
} 
else{

    $_SESSION["nao_autenticado"] = true;
    header("location: ../index.php");
    exit();
}

?>