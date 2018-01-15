<?php
include 'includes/session.php';
include 'includes/variables.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>FletNix | De laatste films in jouw huiskamer</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="container">

    <?php include 'includes/menu.php'?>

      <div id="content">

        <div id="contentbox">
            <div id="contentbox">
                <a href="StarWarsTheLastJedi.html"><img class="movieposterhome" src="Afbeeldingen/starwarsthelastjedi.jpg" alt=""></a>
                <img class="movieposterhome" src="Afbeeldingen/starwarsrogueone.jpg" alt="">
                <img class="movieposterhome" src="Afbeeldingen/batmanthedarkknight.jpg" alt="">
                <img class="movieposterhome" src="Afbeeldingen/thefateofthefurious.jpeg" alt="">
                <br>De laatste films in jouw huiskamer<br>
                <?php if(isset($_SESSION['user_name'])){} else { echo "
                <img id='scrollimage' src='Afbeeldingen/scrollimage.png' alt=''><br><br>
                <a href='registreer.html'><button id='registratieknop'>Registreer nu!</button></a>
                ";}?>
            </div>
        </div>
        </div>
      </div>
    </div>
</body>

</html>
