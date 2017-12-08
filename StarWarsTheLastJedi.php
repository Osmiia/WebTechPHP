<!DOCTYPE html>
<html>

<head>
    <title>FletNix | De laatste films in jouw huiskamer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="container">
    <header><img src="Afbeeldingen/FletNixLogo.png" alt=""></header>
    <div id="seperator">&nbsp;</div>
    <div id="menu">
        <a class="menubutton" href="index.php">Home</a>
        <div class="dropdown">
            <a id="overzicht" href="movielist.php">Overzicht</a>
            <div class="dropdowncontent">
                <a class="menubutton" href="#">Action</a>
                <a class="menubutton" href="#">SciFi</a>
                <a class="menubutton" href="#">Adventure</a>
            </div>
        </div>
        <a class="menubutton" href="about.php">Over Ons</a>
        <a class="menubutton" href="subscribtion.php">Abbonementen</a>
        <div class="dropdown">
            <a class="menubutton" href="account.php">Karel de Heer</a>
            <div class="dropdowncontent">
                <a class="menubutton" href="#">Kijkgeschiedenis</a>
                <a class="menubutton" href="#">Abonnementstatus</a>
                <a class="menubutton" href="#">Uitloggen</a>
            </div>
        </div>
    </div>


    <div id="content" style="background-image: url('Afbeeldingen/starwarsbackground.jpg')">
        <div id="contentbox">
            <div id="contentbox-left">
                <img id="movieposterid" src="Afbeeldingen/starwarsthelastjedi.jpg" alt="">
                Star Wars: The Last Jedi<br>
                180 Minuten<br>
                2017
                <a href="Video/Star%20Wars%20The%20Last%20Jedi%20Trailer%20(Official).mp4"><button id="afspelen">Afspelen</button></a>
            </div>
            <div id="contentbox-right">
                <h1>Star Wars: The Last Jedi</h1>
                <p>Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares to do battle with the First Order.</p>
                <h3>Regiseur</h3>
                <p>Rian Johnson</p>
                <h3>Writers</h3>
                <p>Rian Johnson</p>
                <p>George Lucas</p>
                <h3>Cast</h3>
                <p>Daisy Ridley</p>
                <p>John Boyega</p>
                <p>Mark Hamill</p>
                <p><img id="kijkwijzer" src="Afbeeldingen/kijkwijzer.png" alt=""></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
