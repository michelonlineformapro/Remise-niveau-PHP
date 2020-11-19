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
        <h1 class="title is-1">LES BOUCLES :</h1>
    </div>
    <h3 class="title is-3">Les boucles simples Tant Que :</h3>
    <p>Les instructions sont répétées tant que la conditions est vraie</p>
    <p>Exemple :</p>
    <p>$ligne = 1;</p>
    <p>while($ligne <= 100){</p>
    <p>echo "On incrémente le nombre de ligne de 1 à 100, rappel pour incrémenté on utilise la variable ++, c'est à dire $ligne++; ou $ligne += 1;</p>
    <p>$ligne++;</p>
    <p>}</p>
    <p>Une fois à 100 : la boucle s'arrète.</p>
    <hr>
    <h3 class="title is-3">Les boucles for :</h3>
    <p>C'est une forme condensée des boucles</p>
    <p style="color: green">for(Initialiser; condition; incrementation){ résultat }</p>
    <p>Exemple :</p>
    <p>for($repetition = 0; $repetition <= 100; $repetion++){</p>
    <p>echo "On va ecrire cette phrase : " .$repetiton. " fois !"; </p>
    <hr>
    <a class="button is-success" href="tableaux.php">Les tableaux</a>
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
