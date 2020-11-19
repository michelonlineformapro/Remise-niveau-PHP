<!doctype>
<html>
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Appel du framework BULMA -->
        <link rel="stylesheet" type="text/css" href="node_modules/bulma/css/bulma.css">
        <!-- Apple de font-awesome (jeux d'icone gratuite) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    </head>
    <body>
    <header>
        <!-- Php peut appeler des fichiers et les inclures dans une autres pages (ici le menu navbar) -->
        <?php
        require_once "views/navbar.php";
        ?>
    </header>
    <div class="container">
        <div class="notification is-danger">
            <h1 class="title is-1">LES OUTILS :</h1>
        </div>
        <hr>
        <h2 class="title is-2">WampServer : (Serveur Apache + Php + MySQL)</h2>
        <hr>
        <p>Pour créer des sites web dynamiques, nous devons installer des outils qui transformeront notre
            ordinateur en serveur, afin de pouvoir tester notre site.</p>
        <p>Les principaux outils dont nous avons besoin sont :</p>
        <hr>
        <h3 class="title is-3">Apache, le serveur web : (local et distant)</h3>
        <hr>
        <p>C'est ce qu'on appelle un serveur web. Il s'agit du plus important de tous les programmes,
            car c'est lui qui est chargé de délivrer les pages web aux visiteurs. Cependant,
            Apache ne gère que les sites web statiques (il ne peut traiter que des pages HTML).
            Il faut donc le compléter avec d'autres programmes.
        </p>
        <hr>
        <h3 class="title is-3">PHP, le programme qui permet au serveur web d'exécuter des pages PHP</h3>
        <hr>
        <p>
            C'est un langage de programmation et un plug-in pour Apache qui le rend capable de traiter des pages web dynamiques en PHP. En clair,
            en combinant Apache et PHP, notre ordinateur sera capable de lire des pages web en PHP.
        </p>
        <hr>
        <h3 class="title is-3">MySQL, le logiciel de gestion de bases de données.</h3>
        <hr>
        <p>
            C'est le logiciel de gestion de bases de données (SGBDR = Système de gestion de base de données relationnelles) dont je vous ai parlé en introduction. Il permet d'enregistrer des données de manière organisée (comme la liste des membres de votre site).
            Nous n'en aurons pas besoin immédiatement, mais autant l'installer de suite.
        </p>
        <hr>
        <h3 class="title is-3">CONCLUSION</h3>

            <p>Bien qu'il soit possible d'installer ces outils séparément,
                il est plus simple pour nous d'installer un paquetage tout prêt :
                MAMP sous Windows et Mac OS X, ou XAMPP sous Linux.</p>

            <p>Il est conseillé d'utiliser un éditeur de texte qui colore le code source,
                comme Sublime Text ou Atom, pour programmer convenablement en PHP.</p>
            <p>Pour les personnes plus expérimentées qui travaillent sur de gros projets,
                je recommande PHPStorm ou Visual Studio Code.</p>

        <p>
            <hr>
            <a class="button is-primary" href="views/premierscript.php">Premier script</a>
        <hr>
        </p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- Mise en place du burger button responsive -->
    <script>
        /*DU JQUERY
        Récuprération de la classe .navbar-burger
        Appel de la fonction jQuery click -> qui appel une fonction
        On récupère l'identifiant navbarMenuHeroA et la classe navbarBurger
        La methode toogleClass jQuery va faire switcher la classe d'un element a l'autre
        C un boolean qui retourne True Ou False
        */
        $('.navbar-burger').click(function() {
            $('#navbarMenuHeroA, .navbar-burger').toggleClass('is-active');
        });
    </script>
    </body>
</html>
