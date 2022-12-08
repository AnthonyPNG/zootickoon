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

      echo "<table class='table table-striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Date</th>";
      echo "<th>Login</th>";
      echo "<th>Subject</th>";
      echo "<th>Description</th>";
      echo "<th>Priotity</th>";
      echo "<th>Sector</th>";
      echo "<th>Statut</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";         

      $sql="SELECT * FROM ticket WHERE id=".$_GET['id']."";
      $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true)); 

      foreach ($statement->fetchAll(PDO::FETCH_OBJ) as $ligne) {
        echo "<tr>";
        echo "<th id='actualId'>".$ligne->id.'</th>';
        echo '<th>'.$ligne->datet.'</th>';
        echo '<th>'.$ligne->login.'</th>';
        echo '<th>'.$ligne->subjet.'</th>';
        echo '<th>'.$ligne->description.'</th>';
        echo '<th>'.$ligne->prio.'</th>';
        echo '<th>'.$ligne->sector.'</th>';
        echo "<th id='actualStatut'>".$ligne->statut.'</th>';
        echo "</tr>";
      }

      $statement->closeCursor();

      echo "</tbody>";
      echo "</table>";
    ?>

   </body>
</html>