<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ticket.css">
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

      echo '<option>Choose...</option>';

      $sql="SELECT * FROM ticket";
      $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true)); 

      foreach ($statement->fetchAll(PDO::FETCH_OBJ) as $ligne) {
        echo '<option id="optionId" value='.$ligne->id.'>'.$ligne->id.'</option>';
      }

      $statement->closeCursor();
    ?>

   </body>
</html>