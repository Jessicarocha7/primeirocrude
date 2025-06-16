<?php

include("db.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];

$sql = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, matricula)
        VALUES ('$nome','$email','$senha','$telefone','$cpf','$matricula')";



if (mysqli_query($conn, $sql)){


    echo " aluno inserido com sucesso! ";

}else{

    echo " erro ao inserir: " . mysqli_error($conn);
}
?>

    </body>
    </html>

