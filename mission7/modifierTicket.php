<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="afficheListeTickets.css">
    <title>Ticket done</title>
  </head>

  <body>
    <?php
      session_start();
      $_SESSION['id'] = $_GET['id'];

      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='root';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e) {
        echo'Connexion failed:'.$e->getMessage(); 
      }
      
      $sql="update ticket set statut=\"resolved\" where id=".$_GET['id']."";
      $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true)); 
    ?>

    <?php
      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='root';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e) {
        echo'Connexion failed:'.$e->getMessage(); 
      }
      
      $sql="SELECT * FROM ticket WHERE id=".$_GET['id']."";
      $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true));
    ?>

    <div class="container">
      <h2>Tickets list</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Login</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Sector</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql="SELECT * FROM ticket WHERE id=".$_GET['id']."";
            $statement=$dbh->query($sql) or die(print_r($dbh->errorInfo(),true));

            foreach ($statement->fetchAll(PDO::FETCH_OBJ) as $ligne) {
              echo '<tr>';
              echo '<th>'.$ligne->id.'</th>';
              echo '<th>'.$ligne->datet.'</th>';
              echo '<th>'.$ligne->login.'</th>';
              echo '<th>'.$ligne->subjet.'</th>';
              echo '<th>'.$ligne->description.'</th>';
              echo '<th>'.$ligne->prio.'</th>';
              echo '<th>'.$ligne->sector.'</th>';
              echo '<th>'.$ligne->statut.'</th>';
              echo '</tr>';
            }
            $statement->closeCursor();    
          ?>
        </tbody>
      </table>
    </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <a class="btn btn-primary" href="afficheListeTickets.php" role="button">Tickets List</a>
   </body>
</html>