<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Index</title>
        <link rel='stylesheet' type='text/css' href='index.css' media='all'>
        <script src="function.js"></script>
        <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
      </head>

      <body>
        <ul class="menu">
          <li><a href="http://localhost/wordpress/?page_id=16&preview=true">Homepage</a></li>
          <li><a href="http://localhost/zootickoon/mission2/index.html" class="active">Zoo Sectors</a></li>
          <li><a href="http://localhost/wordpress/?page_id=85&preview=true">Food</a></li>
          <li><a href="http://localhost/wordpress/?page_id=125&preview_id=125&preview_nonce=afcfa17549&preview=true">Accomodation</a></li>
          <li><a href="http://localhost/wordpress/?page_id=124&preview_id=124&preview_nonce=0a4485f99e&preview=true">Events</a></li>
          <li><a href="#">Tickets</a></li>
          <li><a href="http://localhost/zootickoon/mission2/formTicket.html">Ticket Form</a></li>
          <li><a href="http://localhost/zootickoon/mission6/authentification.html">Login</a></li>
        </ul>

        <h1 class="zooname">Stone Ocean</h1>

        <?php
          $heure = date("H");
          if (8 <= $heure && $heure < 12) {
            echo "<img src='unicornfish.jpeg' alt='Unicorn Fish' class='center'>";
          }
          else if (12 <= $heure && $heure < 20) {
            echo "<img src='shark.jpeg' alt='Shark' class='center'>";
          }
          else {
            echo "<img src='lightfish.jpeg' alt='Light Fish' class='center'>";
          }
        ?>
        
        <div class="media">
          <div class="image">
            <img src="penguin.jpg" alt="Penguin" class="zoom">
          </div>
          <div class="content">
            <h2>Polar Zone</h2>
            <p>
              Want to travel to the Antartic?
              You will be able to meet penguins, polar bear, seal and more...
              They will be happy to see you!
            </p>
            <br>
            <p>
              <u>Code:</u> PZ1
            </p>
            <br>
            <p><u>Surface area:</u> 100m²</p>
            <br>
            <p><u>Number of animals present:</u> 30</p>
            <br>
            <p><u>Maximum capacity:</u> 50</p>
          </div>
        </div>

        <div class="media flipped">
          <div class="image">
            <img src="clownfish.jpg" alt="Clownfish" class="zoom">
          </div>
          <div class="content">
            <h2>Tropical Zone</h2>
            <p>
              Want to go to an island?
              Comme enjoy the joyful presence of the dolphins and the turtles.
              You will be able to attend of the dolphins' show and you will also be able to feed the turtles.
            </p>
            <br>
            <p><u>Code:</u> TZ2</p>
            <br>
            <p><u>Surface area:</u>: 88m²</p>
            <br>
            <p><u>Number of animals present:</u> 15</p>
            <br>
            <p><u>Maximum capacity:</u> 40</p>
          </div>
        </div>

        <div class="media">
          <div class="image">
            <img src="shark.jpg" alt="Shark" class="zoom">
          </div>
          <div class="content">
            <h2>Shark Zone</h2>
            <p>
             Want to have some thrill?
             Come to experience "Jaws" in real life with the Shark Zone!
             They are waiting you!
            </p>
            <br>
            <p><u>Code:</u> SZ3</p>
            <br>
            <p><u>Surface area:</u> 75m²</p>
            <br>
            <p><u>Number of animals present:</u> 10</p>
            <br>
            <p><u>Maximum capacity:</u> 15</p>
          </div>
        </div>
        
        <div class="media flipped">
          <div class="image">
            <img src="jellyfish.jpg" alt="Jellyfish" class="zoom">
          </div>
          <div class="content">
            <h2>Jellyfish Zone</h2>
            <p>
              Want to enjoy a sparkling place?
              You would like the Jellyfish Zone!
              They will offer you a shining experience!
            </p>
            <br>
            <p><u>Code:</u> JZ4</p>
            <br>
            <p><u>Surface area:</u> 29m²</p>
            <br>
            <p><u>Number of animals present:</u> 62</p>
            <br>
            <p><u>Maximum capacity:</u> 100</p>
          </div>
        </div>

        <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6dee23b6dfb73b79',m:'FtJEU6L7boqRpB5Nm2oBApBg_9rUj4o4H8skNqOv7Z0-1645091720-0-AYm5Q7j0kje2ELqrgW8cXhWKFpmWktnjESH1TnMuTpDoir/qdM2GPgg7x/K2BewnyZ6vZsaVHUApw9ktiNjyXLrDKNwdTfwM0XFGr70fRSp9ylUuLq9qeKjlqNytvE82N2DnajIDW6cQqcbawWvE3XZBRi85UGyTV0QZA6ewKgkFzOsq6mA0Sfl1csOlRRuevQ==',s:[0x4522b42544,0x55295e9f22],}})();</script>
      </body>
    </html>