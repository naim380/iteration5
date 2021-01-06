<!DOCTYPE html>
<html>
    <head>
        <title> Iteration 5</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Iteration 5</h1>  
        <?php
            $servername = 'localhost';
            $username = 'naim';
            $password = 'grenoble38';
            $dbname = 'newbdd2021';
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
            /*premiere quiery*/
            $reponse = $conn->query('SELECT * FROM products');


            // On affiche chaque entrée une à une
            while ($products =$reponse->fetch())
            {

                echo $products['name'] .'</br>';

            }
          
        ?>
    </body>
</html>

    </body>
</html>