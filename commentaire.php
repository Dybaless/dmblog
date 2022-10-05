<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>DM Blog</title>
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
    <h1>Mon Blog</h1>
    </header>
<main class="container">
        <div class="row">
        <div class="col-12 mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Date</th>
                    <th scope="col">Contenu</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM billets"; 
            $response = $db->query( $sql );
            $redirection = $response->fetchAll();

            foreach( $redirection as $cle=>$blog) {
                $monScript = '#';
                if (!empty($blog['script'])) {
                    $monScript = $blog['script'];
                }
                echo '<tr><th scope="row"><a class="nav-link " href="' .$monScript . '">' . $blog['ID'] . '</th><td>' . $blog['titre'] . '</td><td>' . $blog['date_creation'] . '</td><td>' . $blog['contenu'] . '</td></tr>';
            }
            ?>
            </tbody>
        </table>
        </div>
        </div>
    </main>

    <footer class="container">
    </footer>
</body>
</html>