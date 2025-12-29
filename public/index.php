<?php 
include_once('../includes/header.php');

$conn = require_once('../config/db.php');

$sql = "SELECT titulo, 
            descricao, 
            linguagens_usadas, 
            url_projeto, 
            url_repositorio 
            FROM projetos 
            ORDER BY data_criacao DESC";

$result = $conn->query($sql);
?>

<main>


    <div id="splash-screen">
        <div class="scanlines"></div>
    
        <div class="splash-content">
            <div class="tech-loader"></div>
            <h1 id="typing-text"></h1>
        </div>
    </div>

    <div id="conteudo-principal" style="display: none;">

        <section class="hero-section">
            <div class="hero-content">
                <span class="ola">Olá, meu nome é</span>
                <h1>Inti Bohmann.</h1>
                <h2>Eu construo coisas para a internet.</h2>
                <p class="hero-desc">
                    Sou um Técnico em Informática focado em criar experiências digitais 
                    acessíveis e performáticas usando tecnologias modernas.
                </p>
                <a href="#projetos" class="btn-cta">Veja meus projetos</a>
            </div>
        </section>
        
        <section id="curriculo" class="cv-section">
            <h2>Minhas formações</h2>
            <p>Em breve...</p>
        </section>

        <section id="projetos" class="portfolio-section">
            <h2>Meus Projetos</h2>
            <div class="projetos-container">
                <?php
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<article class="projeto-card">';
                        echo '<h3>' . htmlspecialchars($row["titulo"]) . '</h3>';
                        echo '<p>' . htmlspecialchars($row["descricao"]) . '</p>';
                        echo '<p class="linguagens">Tecnologias: <span>' . htmlspecialchars($row["linguagens_usadas"]) . '</span></p>';
                        
                        echo '<div class="links-projeto">';
                        if (!empty($row["url_repositorio"])) {
                             echo '<a href="' . htmlspecialchars($row["url_repositorio"]) . '" target="_blank" class="btn">GitHub</a>';
                        }
                        if (!empty($row["url_projeto"])) {
                             echo '<a href="' . htmlspecialchars($row["url_projeto"]) . '" target="_blank" class="btn">Ver Site</a>';
                        }
                        echo '</div>'; // Fecha links
                        echo '</article>';
                    }
                } else {
                    echo '<p>Nenhum projeto cadastrado ainda.</p>';
                }
                ?>
            </div>
        </section>

    </div>
    
</main>

<script src="assets/js/splash-loader.js"></script> 

<?php 
$conn->close();
include_once('../includes/footer.php'); 
?>