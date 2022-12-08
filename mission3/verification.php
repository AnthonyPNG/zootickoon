<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href='verification.css' media='all'>
        <title>Verification</title>
    </head>

    <body>
        <div class="titlename">Welcome!</div>

        <?php
            session_start();
            $_SESSION['id'] = $_GET['email'];
            $_SESSION['pwd'] = $_GET['password'];
            $checkLog = false;

            //$utilisateurs =["Lina@gmail.com","passeLina","Edgar@gmail.com","passeEdgar"];

            file_put_contents('long.log', $_SESSION['id'] . ' ' . $_SESSION['pwd'] . ' ' . date("F j, Y, g:i a") . "\n", FILE_APPEND);
        
            $auth = new class {};
            $auth->log=[['email' => 'Lina@gmail.com', 'mdp' => 'passeLina'], ['email' => 'Edgar@gmail.com', 'mdp' => 'passeEdgar']];
            /*
            echo "json_encode\n";
            var_dump(json_encode($auth));
            echo "auth\n";
            var_dump($auth);
            */
            file_put_contents('login.json', json_encode($auth));

            $decode = json_decode(json_encode($auth), true);
            /*
            echo "decode\n";
            var_dump($decode);
            */

            foreach ($decode['log'] as $value) {
                if ($_SESSION['id'] == $value['email'] && $_SESSION['pwd'] == $value['mdp']) {
                    $checkLog = true;
                }
            }

            /*
            for ($i=0; $i<count($utilisateurs); $i+=2) {
                if ($_SESSION['id'] == $utilisateurs[$i] && $_SESSION['pwd'] == $utilisateurs[$i+1]) {
                    $checkLog = true;
                }
            }
            */

            if ($checkLog) {    
                echo "<div class=\"alert alert-success\" role=\"alert\">";
                echo "Connected " . $_SESSION['id'];
                echo "</div>";
            }
            else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">\n";
                echo "Error 404!\n";
                echo "</div>";
            }
        ?>
        
    </body>

</html>