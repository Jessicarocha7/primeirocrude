<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Cadastro</title>
</head>
<body>


    <h2>Formulário de Cadastro</h2>
    <form action="inserir.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
    
        <input type="password" id="senha" name="senha" required>
      </div>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" required>

      <label for="matricula">Matrícula:</label>
      <input type="text" id="matricula" name="matricula" required>

      <input type="submit" value="Enviar">
    </form>
  </div>


</body>
</html>
