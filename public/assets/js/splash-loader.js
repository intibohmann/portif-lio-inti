document.addEventListener('DOMContentLoaded', () => {
    const splashScreen = document.getElementById('splash-screen');
    const conteudoPrincipal = document.getElementById('conteudo-principal');
    const typingElement = document.getElementById('typing-text');
    
    // Frase mais curta e técnica fica mais elegante no mobile
    const phrase = "> Inicializando Sistema..."; 
    
    const typingSpeed = 50; // Mais rápido (estilo hacker)
    const pauseAfterTyping = 800; // Pausa rápida
    const fadeOutDuration = 800;

    let i = 0;

    function typeWriter() {
        if (i < phrase.length) {
            typingElement.innerHTML += phrase.charAt(i);
            i++;
            setTimeout(typeWriter, typingSpeed); 
        } else {
            // Quando termina de digitar:
            
            // 1. Para o cursor de piscar (opcional, ou deixa piscando até sumir)
            // typingElement.style.borderRight = 'none'; 
            
            // 2. Espera um pouco e esconde tudo
            setTimeout(esconderSplash, pauseAfterTyping);
        }
    }

    const esconderSplash = () => {
        splashScreen.classList.add('fade-out');
        
        // Garante que o conteúdo principal já esteja visível por trás
        if (conteudoPrincipal) {
            conteudoPrincipal.style.display = 'block'; 
        }

        setTimeout(() => {
            splashScreen.style.display = 'none'; 
        }, fadeOutDuration); 
    };

    // Inicia a lógica
    if (splashScreen && typingElement) {
        typeWriter();
    } else {
        // Fallback caso algo dê errado no HTML
        if (conteudoPrincipal) conteudoPrincipal.style.display = 'block';
        if (splashScreen) splashScreen.style.display = 'none';
    }
});