<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste";


$conn = mysqli_connect($servidor,$usuario,$senha,$banco);


//TESTANDO SE FOR TUDO VERDADEIRO

if(!$conn){

    die ("falha na conexao: " . mysqli_connect_error());


}

?>