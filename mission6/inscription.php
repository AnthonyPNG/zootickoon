<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ticket.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Registration</title>
  </head>

  <body>
    <?php
      session_start();
      $email = $_GET["email"];
      $mdp = $_GET["password"];

      $dsn='mysql:dbname=stone_ocean_db;host=127.0.0.1';
      $user='root';
      $password='root';

      try{
        $dbh=new PDO($dsn,$user,$password); 
      }
      catch(PDOException $e) {
        echo'Connexion failed:'.$e->getMessage(); 
      }

      $sql = "insert into `user` (`email`, `password`) values 
      (:email, :password)";
      $statement=$dbh->prepare($sql);
      $statement->bindParam(":email", $email);
      $statement->bindParam(":password", $mdp);
      $b=$statement->execute();

      if ($b == true) {
        echo "<h1> The request is correctly executed </h1>";
        
        echo "<input type='text' id='nom' value= $email>";
        echo "<input type='text' id='mdp' value= $mdp>";
        
      }
      else {
        echo "error 404";
      }

    ?>
  </body>

  <script src="user.js">
    $(document).ready(function() {
      var n= $( "#nom" ).val(); 
      alert(n);
      var m= $( "#mdp" ).val();
      alert(m);
      let myUser = new User(n,m);
      console.log(myUser.name);
      console.log(myUser.password);
    });
  </script>

<script>
    $(document).ready(function(){ 
      var nom= $( "#nom" ).val(); 
      alert(nom); 
      var mdp= $( "#mdp" ).val(); 
      alert(mdp); 
      sessionStorage.setItem("name", nom);
      sessionStorage.setItem("pwd", mdp);
    });
    
    $(document).ready(function(){console.log(sessionStorage.getItem("name")); });
    $(document).ready(function(){console.log(sessionStorage.getItem("pwd")); });   
  </script>

</html>