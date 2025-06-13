<!DOCTYPE html>
<!-- head and title -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Philocalie</title>
</head>

<body>

<!-- navbar -->
<nav class="navbar">
    <img src="images/logo.png" alt="logo philocalie">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="actualites.php">Atualités</a></li>

        <li class="dropdown">
        <a href="philo.php" class="dropbtn">Publics spécifiques</a>
        <div class="content">
                <a href="seniors.php">Seniors</a>
                <a href="handicap.php">Personnes en situation de handicap</a>
                <a href="entreprises.php">Entreprises</a>
        </div>
        </li>

        <li class="dropdown">
        <a href="philo.php" class="dropbtn">Interventions pédagogiques</a>
        <div class="content">
                <a href="philo.php">Ateliers</a>
                <a href="conférences.php" rel="external">Conférences</a>
        </div>
        </li>

        <li><a href="temoignages.php">Témoignages</a></li>
        <li><a href="apropos.php">Qui sommes-nous ?</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<main class="contact-main">
    <section class="contact-section">
        <h3>Contactez-nous</h3>
        <p2>Pour toute demande d'information ou de partenariat, n'hésitez pas à nous contacter via le formulaire ci-dessous et nous recevrons votre message automatiquement par mail.</p2><br><br><br>
        <form class="contact-form">
            <label for="name">Nom&nbsp;:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email&nbsp;:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message&nbsp;:</label>
            <textarea id="message" name="message"  rows="6" required></textarea>

            <button type="button" class="emailbtn" id="sendBtn" onclick="sendEmail()">Envoyer</button>
            <span id="timer" style="margin-left:1em;color:#888;"></span>
        </form>
        
    </section>
    <script type="text/javascript" src="script.js"></script>

    <!-- receiving emails & autoreplies -->
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "0XHjwjE2FylN5mUTY",
        });
    })();
    </script>
    
</main>



<footer class="footer">
    <div class="footer-legal">
        &copy; 2025 Philocalie. Tous droits réservés.
    </div>
</footer>

</body>



