<?php
include("db.php");

if (!isset($_GET['id'])) {
    echo "ID não fornecido.";
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) != 1) {
    echo "Aluno não encontrado.";
    exit;
}

$aluno = mysqli_fetch_assoc($resultado);
?>

<h2>Editar Aluno</h2>

<form action="editar_aluno.php" method="post">
    <!-- Campo oculto para enviar o ID -->
    <input type="hidden" name="id" value="<?= $aluno['id'] ?>">

    Nome: <input type="text" name="nome" value="<?= $aluno['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $aluno['email'] ?>"><br>
    Telefone: <input type="text" name="telefone" value="<?= $aluno['telefone'] ?>"><br>
    CPF: <input type="text" name="cpf" value="<?= $aluno['cpf'] ?>"><br>
    Matrícula: <input type="text" name="matricula" value="<?= $aluno['matricula'] ?>"><br>
    
    <input type="submit" value="Salvar Alterações">
</form>
