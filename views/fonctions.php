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
    <div class="notification is-primary">
        <h1 class="title is-1">LES FONCTIONS :</h1>
    </div>
    <p>
        Une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur.</p>
        <p>En général, dès que vous avez besoin d'effectuer des opérations un peu longues dont vous aurez à nouveau
            besoin plus tard, il est conseillé de vérifier s'il n'existe pas déjà une fonction qui fait cela pour vous.</p>
        <p>Et si la fonction n'existe pas, vous avez la possibilité de la créer.</p>
    <h4 class="title is-4">Les fonctions native PHP</h4>
    <p>strlen : longueur d'une chaine</p>
    <p>str_replace: rechercher et remplacer</p>
    <p>str_shuffle : réalise un mélange</p>
    <p>strtolower : ecrire en minuscule</p>
    <p>LES DATES</p>
    <p>Les dates sont au format H = heures, i = minutes, d = jour, m = mois, Y = année </p>
    <p>Exemple : $jour = date("d");</p>
    <hr>
    <p>Les fonctions : function MaFonction(){}</p>
    <p>Exemple</p>
    <p>$nom = "TRUMP";</p>
    <p>function DireBonjour($nom){</p>
    <p>echo "Bonjour Donald " .$nom;</p>
    <p>}</p>

    <p>On utlise la fonction comme ceci : DireBonjour("prenom"); </p>
    <h4 class="title is-4">Une fonctions et des paramètres</h4>
    <p>function CalculCarre($valeur1, $valeur2){</p>
    <p>$resultat = $valeur1 * $valeur2;</p>
    <p>return $resultat;</p>
    <p>}</p>
    <p>Pour utilisé la fonction : CalculCarre(5,5);</p>
    <p>echo "Résultat de l'opération = " .$resultat;</p>
    <hr>
    <a class="button is-warning" href="require.php">Des portions de pages</a>
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

