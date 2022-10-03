<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Combat</title>
</head>
<body>
    <?php
    require('connexion.php')
    ?>
    <header class="container">
        <h1>Mini jeu de combat</h1>
        <nav class="nav">
            <?php

        require( 'menu.php' )           
               
            ?>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <?php
                $sql = "SELECT count(*) FROM personnage";
                $response = $db->query( $sql );
                $nbPerso = $response->fetch();

                echo ("<p> Nombre de personnage crées : " . $nbPerso[0] ."</p>");           
                ?>
            </div>    
        </div>
    </main>

    <footer class="container">

    </footer>
</body>
</html>