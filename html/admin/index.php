<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="stylesheet" href="../../css/geral.css">
  <title>
Admin
  </title>
</head>

<body>
  <header>
    <h1>
    </h1>
  </header>
  <main class="form">
    <h2>Cadastro de Usuário</h2>
    <form method="" action="">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br><br>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required><br><br>
      <label for="tipo">Tipo:</label>
      <input type="radio" id="aluno" name="tipo" value="aluno" checked>
      <label for="aluno">Aluno</label>
      <input type="radio" id="administrador" name="tipo" value="administrador">
      <label for="administrador">Administrador</label>
      <input type="radio" id="professor" name="tipo" value="professor">
      <label for="professor">Professor</label><br><br>
      <input type="submit" value="Cadastrar">
    </form>
  </main>
</body>

</html>