<?php
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include "conexao.php";
$sql = "INSERT INTO `funcionarios`(`nome`, `data_nasc`, `funcao`, `salario`, `usuario`, `senha`)
VALUES ('$nome', '$data_nasc', '$funcao', '$salario', '$usuario', '$senha')";
if (mysqli_query($con, $sql)){
    echo "Você foi cadastrado com sucesso!";
    header('location: login.html');
} else {
    echo "Erro no cadastro!";
}
