document.addEventListener('DOMContentLoaded', () => {
    const splashScreen = document.getElementById('splash-screen');
    const conteudoPrincipal = document.getElementById('conteudo-principal');
    const typingElement = document.getElementById('typing-text');
    const phrase = "> Inicializando Sistema..."; 
    const typingSpeed = 50;
    const pauseAfterTyping = 800;
    const fadeOutDuration = 800;

    let i = 0;

    function typeWriter() {
        if (i < phrase.length) {
            typingElement.innerHTML += phrase.charAt(i);
            i++;
            setTimeout(typeWriter, typingSpeed); 
        } else {
            setTimeout(esconderSplash, pauseAfterTyping);
        }
    }

    const esconderSplash = () => {
        splashScreen.classList.add('fade-out');
        if (conteudoPrincipal) {
            conteudoPrincipal.style.display = 'block'; 
        }
        setTimeout(() => {
            splashScreen.style.display = 'none'; 
        }, fadeOutDuration); 
    };

    if (splashScreen && typingElement) {
        typeWriter();
    } else {
        if (conteudoPrincipal) conteudoPrincipal.style.display = 'block';
        if (splashScreen) splashScreen.style.display = 'none';
    }
});