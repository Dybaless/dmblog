<?php
    try  
    {
        $db = new PDO("mysql:host=localhost:3306;dbname=combat;charset=utf8", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
             catch( Execption $e )
    {
            die( "Erreur : " . $e->getMessage());

    }








    