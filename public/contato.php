<?php
include_once('../includes/header.php');

$conn = require_once('../config/db.php');

$mensagem_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $msg = $conn->real_escape_string($_POST['mensagem']);

    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$msg')";

    if ($conn->query($sql) === TRUE) {
        $mensagem_status = "<p class='sucesso'>Mensagem enviada com sucesso!</p>";
    } else {
        $mensagem_status = "<p class='erro'>Erro ao enviar: " . $conn->error . "</p>";
    }
}
?>

<div class="star-rain-container"></div>

<main class="contato-main">
    
    <section class="contato-section">
        
        <h2>Entre em Contato</h2>
        
        <?php echo $mensagem_status; ?>

        <form action="contato.php" method="POST" class="form-contato">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Seu nome">
            </div>

            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="seu@email.com">
            </div>

            <div class="campo">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Digite sua mensagem..."></textarea>
            </div>

            <button type="submit" class="btn-enviar-glow">
                ENVIAR
            </button>
        </form>
    </section>
</main>

<?php 
$conn->close();
include_once('../includes/footer.php'); 
?>