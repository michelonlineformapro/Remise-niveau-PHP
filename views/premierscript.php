<!doctype>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Appel du framework BULMA -->
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css">
    <!-- Apple de font-awesome (jeux d'icone gratuite) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
<header>
    <!-- Php peut appeler des fichiers et les inclures dans une autres pages (ici le menu navbar) -->
    <?php
    require_once "navbar.php";
    ?>
</header>
<div class="container">
    <div class="notification is-warning">
        <h1 class="title is-1">LES BALISES:</h1>
    </div>
        <p>Le code PHP vient s'insérer au milieu du code HTML. On va progressivement
            placer dans nos pages web des morceaux de code PHP à l'intérieur du HTML. </p>

        <p>Ces bouts de code PHP seront les parties dynamiques de la page, c'est-à-dire les parties qui peuvent
            changer toutes seules (c'est pour cela qu'on dit qu'elles sont dynamiques).</p>
    <br>
    <div class="columns is-vcentered">
        <img src="../assets/img/syntaxe.png">
    </div>
    <br>
    <h3 class="title is-3">PHP langage coté serveur :</h3>
    <div class="columns is-vcentered">
        <img src="../assets/img/clientserveur.png">
    </div>
    <p>Sur la figure suivante, vous découvrez concrètement ce qu'il se passe avec notre code source.</p>

    <p>Le code PHP est exécuté en premier et l'ordinateur fait ce qu'on lui demande.
        Ici, on lui a dit « Affiche ce texte ici ».</p>

    <p>Une fois toutes les instructions PHP exécutées (ici c'était simple, il n'y en avait qu'une !),
    la page qui sort est une page qui ne contient que du HTML ! Le PHP est intrerprété par le navigateur et transformé en HTML.
        C'est cette page de « résultat » qui est envoyée au visiteur, car celui-ci ne sait lire que le HTML.</p>

    <br>
    <h3 class="title is-3">En résumé</h3>

    <p> - Les pages web contenant du PHP ont l'extension .php</p>

    <p> - Une page PHP est en fait une simple page HTML qui contient des instructions en langage PHP.</p>

    <p> - Les instructions PHP sont placées dans une balise ouvrante et fermante : <?php ?></p>

    <p> - Pour afficher du texte en PHP, on utilise l'instruction echo</p>

    <p> - Il est possible d'ajouter des commentaires en PHP pour décrire le fonctionnement du code. On utilise pour cela les symboles // ou /* */  .</p>

    <hr>
        <a class="button is-warning" href="variables.php">Les variables</a>
    <hr>
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
