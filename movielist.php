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
        <?php
        $query="select * from movie";
        include 'includes/sql.php';
        foreach ($conn->query($query) as $row)
        {
            echo "<form name=moviedetails method='POST' action='moviedetails.php'><button class='movieposteroverviewbutton' value='".$row['movie_id']."'><img class='movieposteroverview' src='".$row['cover_image']."'. alt=''></button>";
        }
        ?>
    </div>
    </div>
</div>
</body>

</html>