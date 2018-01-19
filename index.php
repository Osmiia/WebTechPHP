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
                <form name=moviedetails method='POST' action='moviedetails.php'>
                <?php
                $query="select  * from movie LIMIT 4";
                include 'includes/sql.php';
                foreach ($conn->query($query) as $row)
                {
                    echo "
                            <button name='movieid' class='movieposteroverviewbutton' value='".$row['movie_id']."'>
                              <img class='movieposteroverview' src='".$row['cover_image']."'. alt=''>
                            </button>
                      ";
                }
                ?>
                </form>
                <br>De laatste films in jouw huiskamer<br>

                <?php
                if(isset($_SESSION['user_name'])){

                }
                else {
                    echo "
                        <img id='scrollimage' src='Afbeeldingen/scrollimage.png' alt=''><br><br>
                        <a href='registreer.html'><button id='registratieknop'>Registreer nu!</button></a>
                    ";}
                ?>

            </div>
        </div>
        </div>
      </div>
    </div>
</body>

</html>
