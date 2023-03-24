<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "grafico";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//variavel post
$q1 = $_POST['opcao'];
$id =0;

$result_usuario = "INSERT INTO dados (id, opcao	) VALUES ('$id', '$q1')";
$resultado_usuario = mysqli_query($conn, $result_usuario);	


if(mysqli_insert_id($conn)){
	
	header("Location:  index.php");
}else{
echo "erro";
}