<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização e validação dos dados
    $nome     = strip_tags(trim($_POST["nome"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST["mensagem"]);

    // Validação dos dados
    if (empty($nome) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($mensagem)) {
        echo "Por favor, preencha corretamente todos os campos.";
        exit;
    }

    // Destinatário
    $para = "seuemail@seudominio.com"; // Troque para seu e-mail

    // Assunto do e-mail
    $assunto = "Nova mensagem de contato do site";

    // Corpo do e-mail
    $conteudo = "Nome: $nome\n";
    $conteudo .= "Email: $email\n\n";
    $conteudo .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $nome <$email>";

    // Enviar o e-mail
    if (mail($para, $assunto, $conteudo, $headers)) {
        echo "<p>Mensagem enviada com sucesso! Agradecemos o seu contato.</p>";
    } else {
        echo "<p>Erro ao enviar a mensagem. Tente novamente mais tarde.</p>";
    }
}
?>
