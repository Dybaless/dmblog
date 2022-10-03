<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Personnages</title>
</head>

<body>
    <?php
    require('connexion.php');
    ?>
    <header class="container">
    <h1>Mini jeu de combats</h1>
        <nav class="nav">
            <?php
            require ('menu.php');
            ?>
        </nav>
    </header>
    
        }

    <main class="container">
     <div class="row">
        <div class="col-6 mt-5">
        <?php
        if(isset( $_GET['supp'] ) ) {
            $sql = "DELETE FROM personnage WHERE id=" . $_GET['id'];
            if(  $db->exec( $sql ) ) {
                echo '<p> Personnage supprimé</p>';
            } else {
                echo '<p> Erreur lors de la suppresion</p>';
            }
        }    
        ?>
        <h6>Liste des personnages</h6><br>
        <p>Choisir un personnage à modifier :</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Supprimer</th>
                        <th scope="col">Personnage</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM personnage"; 
                    $response = $db->query( $sql );
                    $listPerso = $response->fetchAll();

                    foreach( $listPerso as $cle=>$perso ) {
                        echo '<tr><th scope="row">' . $perso['id'] . 
                        '</th><td><a href="personnage.php?id=' . $perso['id'] . '&supp">x</a></td><td>'
                        . $perso['nom'] . '</td></tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-6 mt-5">
            <h6> Ajouter des personnages </h6>
        </div>
    </div>
    </main>

    <footer class="container">

    </footer>
</body>
</html>