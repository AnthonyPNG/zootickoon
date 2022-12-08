<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="afficheListeTickets.css">
    <title>Ticket</title>
  </head>

  <body>
    <?php 
      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='root';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e){
        echo'Connexion échouée:'.$e->getMessage(); 
      }	
       
      
      $sql="update ticket set statut=\"resolved\" where id=".$_GET['id']."";
      $statement=$dbh->prepare($sql);
      $b=$statement->execute();
      $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true));

      echo "resolved";
      
    ?>

   </body>
</html>