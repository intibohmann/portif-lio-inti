<?php 
include_once('../includes/header.php');

$conn = require_once('../config/db.php');

$sql = "SELECT titulo, descricao, linguagens_usadas, url_projeto, url_repositorio FROM Projects ORDER BY data_criacao DESC";

$result = $conn->query($sql);
?>

<main>
    <div id="splash-screen">
        <h1 id="typing-text"></h1>  
        <div class="loader">
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="dot3"></div>
        </div> 
    </div>
    <div id="conteudo-principal" style="display: none;"></div>

    <section id="curriculo" class="cv-section">
        <h2>Minhas formações</h2>
    </section>

    <section id="projetos" class="portfolio-section">
        <h2>Meus Projetos</h2>
        <div class="projetos-container">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<article class="projeto-card">';
                    echo '<h3>' . htmlspecialchars($row["titulo"]) . '</h3>';
                    echo '<p>' . htmlspecialchars($row["descricao"]) . '</p>';
                    echo '<p class="linguagens">Tecnologias: <span>' . htmlspecialchars($row["linguagens_usadas"]) . '</span></p>';
                    
                    if (!empty($row["url_repositorio"])) {
                         echo '<a href="' . htmlspecialchars($row["url_repositorio"]) . '" target="_blank">Ver Repositório (GitHub)</a>';
                    }
                    if (!empty($row["url_projeto"])) {
                         echo '<a href="' . htmlspecialchars($row["url_projeto"]) . '" target="_blank">Ver Site</a>';
                    }
                    echo '</article>';
                }
            } else {
                echo '<p>Nenhum projeto cadastrado ainda.</p>';
            }
            ?>
        </div>
    </section>
    
</main>
<script src="assets/js/splash-loader.js"></script> 
<?php 
$conn->close();

include_once('../includes/footer.php'); 
?>