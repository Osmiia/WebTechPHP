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
      <div id="abbonementenLijst">
        <h1>Abonnement</h1>
          <h3>Selecteer een abonnement</h3>
      </div>
      <div id="abbonementenLijstBasis">
          <a class="abonnementen" href="registreer.php">
        <h2>Basis</h2>
        <h3>€7,99 p/m</h3>
        <ul>
          <li>1 persoon tegelijkertijd kan kijken</li>
          <li>Streamen in 720p</li>
        </ul>
          </a>
      </div>
      <div id="abbonementenLijstDuo">
          <a class="abonnementen" href="registreer.php">
          <h2>Duo</h2>
        <h3>€9,99 p/m</h3>
        <ul>
          <li>Met 2 mensen tegelijkertijd kijken</li>
          <li>Streamen in 1080p</li>
        </ul>
          </a>
      </div>
      <div id="abbonementenLijstFamilie">
          <a class="abonnementen" href="registreer.php">
        <h2>Familie</h2>
        <h3>€11,99 p/m</h3>
        <ul>
          <li>Ideaal voor het gehele gezin, met 5 personen tegelijkertijd kijken</li>
          <li>Streamen in 4k</li>
        </ul>
      </a>
      </div>
      </div>
</div>
</body>
</html>
