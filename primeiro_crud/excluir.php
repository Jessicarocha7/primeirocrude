<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Aluno excluído com sucesso! <a href='listar.php'>Voltar à lista</a>";
    } else {
        echo "Erro ao excluir: " . mysqli_error($conn);
    }
} else {
    echo "ID não fornecido.";
}
?>
