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
        <div class="hero-wrapper">
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
                        <div class="hero-image-container">
                <div class="tech-border"></div>
                <img src="assets/img/perfil.jpeg" alt="perfil" class="profile-pic">
                <div class="orbit-container">
                    <div class="orbit-icon" style="--i:0"><i class="devicon-php-plain"></i></div>
                    <div class="orbit-icon" style="--i:1"><i class="devicon-javascript-plain"></i></div>
                    <div class="orbit-icon" style="--i:2"><i class="devicon-css3-plain"></i></div>
                    <div class="orbit-icon" style="--i:3"><i class="devicon-html5-plain"></i></div>
                    <div class="orbit-icon" style="--i:4"><i class="devicon-mysql-plain"></i></div>
                    <div class="orbit-icon" style="--i:5"><i class="devicon-nodejs-plain"></i></div>
                    <div class="orbit-icon" style="--i:6"><i class="devicon-express-original"></i></div>
                </div>
            </div>

        </div>
    </section>

        <section id="curriculo" class="cv-section">
            <h2>Minha Jornada Acadêmica</h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="date">2023 - 2025 (Conclusão)</span>
                        <h3>Técnico em Informática para Internet</h3>
                        <h4 class="institution">Instituto Federal Catarinense (IFC)</h4>
                        <p>
                            Formação focada no desenvolvimento de sistemas web completos.
                            Durante o curso, desenvolvi competências em lógica de programação,
                            banco de dados, design de interfaces e arquitetura de software.
                        </p>
                        <ul class="skills-list">
                            <li>Lógica de Programação & Algoritmos</li>
                            <li>Desenvolvimento Full-Stack (PHP, JS)</li>
                            <li>Modelagem de Banco de Dados (SQL)</li>
                            <li>Redes de Computadores & Infraestrutura</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="date">2025 (Conclusão)</span>
                        <h3>Introdução a Cibersegurança</h3>
                        <h4 class="institution">Cisco Networking Academy</h4>
                        <p>
                            Formação focada noções básicas de segurança cibernética para proteger 
                            a vida digital pessoal e obter informações sobre os maiores desafios 
                            de segurança que empresas, governos e instituições educacionais enfrentam.
                        </p>
                        <ul class="skills-list">
                            <li>Pensamento crítico frente a ameaças</li>
                            <li>Noções de proteção de sistemas e dados</li>
                            <li>Reconhecimento de ataques comuns</li>
                            <li>Cultura de segurança e responsabilidade digital</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="date">2025 (Conclusão)</span>
                        <h3>IT Custumer basics</h3>
                        <h4 class="institution">Cisco Networking Academy</h4>
                        <p>
                            Curso focado no desenvolvimento de habilidades em suporte técnico e atendimento 
                            ao cliente, como também no gerenciamento e soluções de problemas em ambientes de TI.
                        </p>
                        <ul class="skills-list">
                            <li>Comunicação clara com usuários não técnicos</li>
                            <li>Atendimento e suporte ao cliente em TI</li>
                            <li>Resolução básica de problemas técnicos</li>
                            <li>Postura profissional e empatia no ambiente de TI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

                <section id="curriculo" class="cv-section">
            <h2>Minha Jornada Profissional</h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="date">2026</span>
                        <h3>Técnico em informática para internet</h3>
                        <h4 class="institution">Nome da sua empresa</h4>
                        <p>
                            Minha primeira experiência profissional na área de TI, onde aplicarei os conhecimentos adquiridos durante o curso técnico,
                            atuando no desenvolvimento de projetos web, manutenção de sistemas e suporte técnico aos usuários, pode ser a sua empresa! 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="habilidades" class="skills-section">
            <h2>Arsenal Tecnológico</h2>
            <p class="section-subtitle">Ferramentas e tecnologias que domino</p>

            <div class="skills-grid">

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-html5-plain"></i></div>
                    <h3>HTML5 & CSS3</h3>
                    <p>Estruturação semântica e estilização moderna (Flexbox, Grid, Animações).</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-javascript-plain"></i></div>
                    <h3>JavaScript (ES6+)</h3>
                    <p>Intermediário - Manipulação de DOM, Fetch API, Programação Assíncrona e Lógica.</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-php-plain"></i></div>
                    <h3>PHP Moderno</h3>
                    <p>Intermediário - Desenvolvimento Back-end, CRUD, POO, Integração com APIs e MVC.</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-mysql-plain"></i></div>
                    <h3>MySQL / SQL</h3>
                    <p>Modelagem de dados, Queries complexas e Gerenciamento de BD.</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-nodejs-plain"></i></div>
                    <h3>Node.js & Express</h3>
                    <p>Noções de Back-end com JS, criação de servidores e APIs REST.</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-git-plain"></i></div>
                    <h3>Git & GitHub</h3>
                    <p>Versionamento de código, trabalho em equipe e CI/CD básico.</p>
                </div>

                <div class="skill-card">
                    <div class="icon-box"><i class="devicon-python-plain"></i></div>
                    <h3>Python</h3>
                    <p>Básico - sintaxe e lógica de programação,estruturas de controle,
                         criação de funções, manipulação de estruturas de dados e utilização
                          básica de bibliotecas da linguagem Python.</p>
                </div>
            </div>
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
                        echo '</div>'; 
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