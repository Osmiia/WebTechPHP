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
            <div id="registratieformbox">
                Registratieformulier
            <form id="registratie" action="account.php" method="post">
                Voornaam:
                <input type="text" placeholder="Voornaam" required><br>
                Achternaam:
                <input type="text" placeholder="Achternaam" required><br>
               E-mail adres
                <input type="text" placeholder="E-Mail" required><br>
                Postcode:
                <input type="text" placeholder="Postcode" required><br>
                Woonplaats:
                <input type="text" placeholder="Woonplaats" required><br>
                Huisnummer:
                <input type="text" placeholder="Huisnummer" required><br>
                Rekeningnummer:
                <input type="text" placeholder="Rekeningnummer" required><br>
                Wachtwoord:
                <input type="password" placeholder="Wachtwoord" required><br>
                Wachtwoord herhalen:
                <input type="password" placeholder="Wachtwoord" required><br>
                Abonnementtype<br>
                basis:
                <input type="radio" class="abbo" name="abonnementtype">
                duo:
                <input type="radio" class="abbo" name="abonnementtype">
                familie:
                <input type="radio" class="abbo" name="abonnementtype">
                <input type="submit" value="Account aanmaken">
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
