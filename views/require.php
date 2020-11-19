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
        <h1 class="title is-1">LES INCLUDES, REQUIRE et REQUIRE_ONCE :</h1>
    </div>
    <h3 class="title is-3">Eviter les répétition (DRY Dont repeat Yourself)</h3>
    <p>
        En PHP, nous pouvons facilement insérer d'autres pages (on peut aussi insérer seulement des morceaux de pages)
        à l'intérieur d'une page.</p>

        <p>Le principe de fonctionnement des inclusions en PHP est plutôt simple à comprendre. Vous avez un site web composé de, disons, vingt pages. Sur chaque page, il y a un menu,
        toujours le même. Pourquoi ne pas écrire ce menu (et seulement lui) une seule fois dans une page menus.php  ?
    </p>
    <hr>
    <p><b>include :</b> inclus une portion de page, si elle n'existe pas le site va l'ignoré.</p>
    <p><b>require :</b> inclus une portion de page, si elle n'est pas trouvé le site retourne une erreur 404.</p>
    <p><b>require_once :</b> inclus une portion de page une seule fois, si elle n'est pas trouvé le site retourne une erreur 404.</p>
    <hr>
    <p>Dans un site on utlise une navbar commune à toutes les pages</p>
    <br>
    <ul>
        <li>1 - On créer un fichier .php : ex: menu.php</li>
        <li>2 - Cette page va contenir le code HTML de la barre de navigation.</li>
        <li>3 - Dans chaque page, on va utilisé :</li>
        <p>require_once "views/navbar.php";</p>
    </ul>


    <hr>
    <a class="button is-success" href="getpost.php">Des données dans URL</a>
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

