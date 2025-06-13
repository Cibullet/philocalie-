function updateTimer() {
    const lastSent = localStorage.getItem('lastMailSent');
    const sendBtn = document.getElementById('sendBtn');
    const timerSpan = document.getElementById('timer');
    const now = Date.now();
    const threeMinutes = 3 * 60 * 1000;

    if (lastSent && now - parseInt(lastSent, 10) < threeMinutes) {
        sendBtn.disabled = true;
        let remaining = threeMinutes - (now - parseInt(lastSent, 10));
        let minutes = Math.floor(remaining / 60000);
        let seconds = Math.floor((remaining % 60000) / 1000);
        timerSpan.textContent = `Pour envoyer un autre message, veuillez attendre - ${minutes}:${seconds.toString().padStart(2, '0')}`;
        setTimeout(updateTimer, 1000);
    } else {
        sendBtn.disabled = false;
        timerSpan.textContent = '';
    }
}

function sendEmail() {

    const templateParams = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value,
    };

    emailjs
        .send('service_0dj864g', 'template_h9bcf0r', templateParams)
        .then(() => {
            alert('Votre message a été envoyé avec succès !');
            localStorage.setItem('lastMailSent', Date.now().toString());
            updateTimer();
        }) 
        .catch((error) => {
            console.log('Erreur lors de l\'envoi du message :', error);
            alert('Une erreur est survenue, veuillez réessayer plus tard.');
        });
}

// Lance le timer au chargement de la page
window.addEventListener('DOMContentLoaded', updateTimer);
