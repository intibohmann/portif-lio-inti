document.addEventListener('DOMContentLoaded', () => {
    const splashScreen = document.getElementById('splash-screen');
    const conteudoPrincipal = document.getElementById('conteudo-principal');
    const typingElement = document.getElementById('typing-text');
    
    const phrase = "Bem-vindo ao meu portifólio e curriculo digital!";
    
    const typingSpeed = 70;
    const pauseAfterTyping = 1000;
    const fadeOutDuration = 700;

    let i = 0;
    function typeWriter() {
        if (i < phrase.length) {
            typingElement.innerHTML += phrase.charAt(i);
            i++;
            setTimeout(typeWriter, typingSpeed); 
        } else {
            typingElement.style.borderRight = 'none'; 
            
            setTimeout(esconderSplash, pauseAfterTyping);
        }
    }

    const esconderSplash = () => {
        splashScreen.classList.add('fade-out');
        setTimeout(() => {
            splashScreen.style.display = 'none'; 
            conteudoPrincipal.style.display = 'block'; 
        }, fadeOutDuration); 
    };
    if (splashScreen && conteudoPrincipal) {
        typeWriter();
    } else {
        if (conteudoPrincipal) {
            conteudoPrincipal.style.display = 'block';
        }
    }
});