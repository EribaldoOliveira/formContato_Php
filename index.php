<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
  <!-- Link para o seu CSS personalizado -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form-container">
    <div class="form-card">
      <h2 class="form-title">Entre em Contato</h2>
      <form action="enviar.php" method="POST">
        <div class="input-group">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" required>
        </div>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
          <label for="mensagem">Mensagem:</label>
          <textarea name="mensagem" id="mensagem" rows="5" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar</button>
      </form>
    </div>
  </div>
</body>

</html>
