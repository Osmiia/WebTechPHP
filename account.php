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

    <div id="content">
        <div id="contentbox">
            <div id="contentbox-left">
                <img id="profielfoto" src="Afbeeldingen/karel.jpg" alt="">
                Karel de Heer<br>
                089748
            </div>
            <div id="contentbox-right">
                <div id="account">
                    <h2>Account informatie</h2>
                    Gebruikersnaam: k.deheer<br>
                    Naam: Karel de Heer<br>
                    Leeftijd: 75<br>
                    Abonnement ID: 089748<br>
                    Rekeningnummer: UI15 ING 934839439834<br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
