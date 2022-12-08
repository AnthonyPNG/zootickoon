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
      
      $sql="update ticket set statut=\"resolved\" where id=:id";
      $id=$_SESSION['id'];
      $statement=$dbh->prepare($sql);
      $statement->bindParam(":id", $id);
      $b=$statement->execute();
    ?>

    <?php
      $_SESSION['id'] = $_GET['id'];

      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e) {
        echo'Connexion failed:'.$e->getMessage(); 
      }
      
      $sql="SELECT * from ticket where id=:id";
      $id=$_SESSION['id'];
      $statement=$dbh->prepare($sql);
      $statement->bindParam(":id", $id);
      $b=$statement->execute();
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
            foreach ($statement->fetchAll(PDO::FETCH_OBJ) as $ligne) {
              echo '<tr>';
              echo '<td>'.$ligne->id.'</td>';
              echo '<td>'.$ligne->datet.'</td>';
              echo '<td>'.$ligne->login.'</td>';
              echo '<td>'.$ligne->subjet.'</td>';
              echo '<td>'.$ligne->description.'</td>';
              echo '<td>'.$ligne->prio.'</td>';
              echo '<td>'.$ligne->sector.'</td>';
              echo '<td>'.$ligne->statut.'</td>';
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