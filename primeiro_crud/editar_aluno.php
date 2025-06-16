<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];

    $sql = "UPDATE usuarios SET 
                nome = '$nome',
                email = '$email',
                telefone = '$telefone',
                cpf = '$cpf',
                matricula = '$matricula'
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Aluno atualizado com sucesso! <a href='listar.php'>Voltar à lista</a>";
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conn);
    }
} else {
    echo "Requisição inválida.";
}
