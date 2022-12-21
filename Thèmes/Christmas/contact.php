<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ordinateur L-->
    <link rel="stylesheet" href="./devices/1440px/accueil.css">

    <!-- Ordinateur-->
    <link rel="stylesheet" href="./devices/1024px/accueil.css">

    <!-- Tablette-->
    <link rel="stylesheet" href="./devices/768px/accueil.css">

    <!-- Portable-->
    <link rel="stylesheet" href="./devices/425px/accueil.css">

    <link rel="icon" type="image/png" href="./Addons/images/icon-site.png">
    <title>Lyta - Travaillez rapidement et facilement !</title>
</head>

<body>
    <header>
        <img src="./Addons/images/logo.png" alt="logo" class="logo">
        <nav>
            <ul>
                <li><a href="./index.html">Acccueil</a></li>
                <li><a href="./premium.html">Premium</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <ul>
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Inscription</a></li>
        </ul>
    </header>



    <main>
        <div class="case-global">
            <div class="case-enter">
                <div class="case1">
                    <p class="titre1">Nous-contacter</p>
                </div>

                <form name="aaaa" method="post">
                    <div class="case2">
                        <p class="texte1"><span class="alerte">*</span> Email</p>
                        <input type="email" placeholder="Votre adresse Email" class="email" name="email" required>
                    </div>

                    <div class="case3">
                        <p class="texte2"><span class="alerte">*</span> Message</p>
                        <textarea id="comment" maxlength="500" placeholder="Ton message" class="message" name="message" required></textarea>
                    </div>

                    <div class="case4">
                        <input type="submit" value="Envoyer le message" class="envoyer" action="submit-database.php" name="envoyer">
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['envoyer'])) {

            $to      = 'contact.lyta@gmail.com';
            $subject = 'Nouveau message';
            $email = $_POST['email'];
            $message = $_POST['message'];

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= 'Content-type: text/html; charset="utf8"' . "\n";
            $headers .= 'Content-Transfer-Encoding: 8bit';

            mail($to, $subject, $email, $message);
        }
        ?>
    </main>



    <footer>
        <div class="container-footer">
            <div class="block-f">
                <h3>A propos</h3>
                <p><a href=#>Qui sommes nous ?</a></p>
                <p><a href=#>Blog</a></p>
                <p><a href="./CGV.html">Conditions d'utilisation</a></p>
                <p><a href="privacy.html">Confidentialité</a></p>
                <p><a href="./premium.html">Passer à premium</a></p>
            </div>
            <div class="block-f">
                <h3>Support</h3>
                <p><a href=#>Status des services</a></p>
                <p><a href=#>Nous contacter</a></p>
            </div>
            <div class="block-f">
                <h3>Nos réseaux</h3>
                <p><a href=#>Instagram</a></p>
                <p><a href=#>Discord</a></p>
            </div>
        </div>

        <div class="copyright">
            <img src="./Addons/images/logo.png" alt="logo" class="logo-footer">
            <p>2022 - Lyta (coming back soon..)</p>
        </div>
    </footer>

</body>


</html>