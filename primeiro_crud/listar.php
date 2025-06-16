<?php
include("db.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql);

echo "<h1> LISTA DE ALUNOS </h1>";

echo "<table border='1'>    
      <tr>  
        <th>Nome</th> 
        <th>Email</th>  
        <th>Telefone</th> 
        <th>CPF</th> 
        <th>Matrícula</th> 
        <th>Ações</th>
      </tr>";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $linha['nome'] . "</td>";
    echo "<td>" . $linha['email'] . "</td>";
    echo "<td>" . $linha['telefone'] . "</td>";
    echo "<td>" . $linha['cpf'] . "</td>";
    echo "<td>" . $linha['matricula'] . "</td>";
    
    // Botões de editar e excluir
    echo "<td>
            <a href='editar.php?id=" . $linha['id'] . "'>Editar</a> | 
            <a href='excluir.php?id=" . $linha['id'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este aluno?');\">Excluir</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
