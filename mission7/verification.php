<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href='verification.css' media='all'>
        <title>Verification</title>
    </head>

    <body>
        <?php
            session_start();

            $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
            $user='root';
            $password='root';
               
            try{
                $dbh=new PDO($dsn,$user,$password); 
            }
            catch(PDOException $e) {
                echo'Connexion failed:'.$e->getMessage(); 
            }

            $login = $_GET['email'];
            $mdp = $_GET['password'];
            //$checkLog = false;

            $sql = "SELECT count(*) as total FROM user WHERE email=:login AND password=:mdp";
            $resultats = $dbh->prepare($sql);
            $resultats->bindParam(":login", $login);
            $resultats->bindParam(":mdp", $mdp);
            $resultats->execute(); 
            $row= $resultats->fetch(PDO::FETCH_ASSOC);

            if ($row["total"] == '1') {
                $_SESSION['email'] = $login;
                echo "Success";
            }
            else {
                echo "Fail";
            }
            
            /*
            if ($checkLog) {    
                echo "<div class=\"alert alert-success\" role=\"alert\">";
                echo "Connecté " . $_SESSION['id'];
                echo "</div>";
            }
            else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">\n";
                echo "Error 404!\n";
                echo "</div>";
            }
            */
        ?>
        
    </body>



</html>