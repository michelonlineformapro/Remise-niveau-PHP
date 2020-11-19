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
    <div class="notification is-danger">
        <h1 class="title is-1">Passer des variables dans une URL</h1>
    </div>
    <p>Dans cette exemple: on passe des variables dans un lien href</p>
    <p>
        <a>Dans une balise anchor href="getpost.php?nom=ALAIN&amp;prenom=DELON"</a>
    </p>

    <a href="getpost.php?nom=ALAIN&amp;prenom=DELON" class="button is-warning">Passer des variables dans url</a>




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

