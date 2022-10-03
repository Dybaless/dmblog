<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Blog</title>
</head>
<body>
<?php
    try  
    {
        $db = new PDO("mysql:host=localhost:3306;dbname=alessandro;charset=utf8", "alessandro", "iepeij3O");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
             catch( Execption $e )
    {
            die( "Erreur : " . $e->getMessage());

    }
?>
    <header class="container">
        <h1>Blog</h1>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-5">
            <?php
                $sql = "SELECT count(*) FROM blog_billets";
                $response = $db->query( $sql );
                $nbBillets = $response->fetch();

                echo ("<p> Nombre de billets crées : " . $nbBillets[0] ."</p>");           
                ?>
            </div>    
        </div>
    </main>

    <footer class="container">

    </footer>
</body>
</html>