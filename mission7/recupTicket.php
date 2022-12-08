<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ticket.css">
    <title>Data Recovery</title>
  </head>

  <body>
    <?php
      session_start();
      $_SESSION['sbj'] = $_GET['subject'];
      $_SESSION['lv'] = $_GET['level'];
      $_SESSION['desc'] = $_GET['description'];
      $_SESSION['zn'] = $_GET['zone'];
      $_SESSION['log'] = $_GET['login'];

      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='root';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e) {
        echo'Connexion failed:'.$e->getMessage(); 
      }

      $sql = "insert into ticket (login, subjet, description, prio, sector) values 
      (:login, :subjet, :description, :prio, :sector)";
      $statement=$dbh->prepare($sql);
      $statement->bindParam(":login", $_SESSION['log']);
      $statement->bindParam(":subjet", $_SESSION['sbj']);
      $statement->bindParam(":description", $_SESSION['desc']);
      $statement->bindParam(":prio", $_SESSION['lv']);
      $statement->bindParam(":sector", $_SESSION['zn']);
      $b=$statement->execute();

      if ($b == true) {
        echo "request correctly executed";
      }
      else {
        echo "error 404";
      }
      ?>

      <h1>Your ticket has been taken into account </h1>
      
      <div class="ticketDisplay">
        <div class="ticketLine">Subject : <?php echo $_SESSION['sbj']; ?></div>
        <div class="ticketLine">Sector : <?php echo $_SESSION['zn']; ?></div>
        <div class="ticketLine">Priority : <?php echo $_SESSION['lv']; ?></div>
        <div class="ticketLine">Description : <?php echo $_SESSION['desc']; ?></div>
      </div>

  </body>

</html>