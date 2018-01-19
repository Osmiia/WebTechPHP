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
        Search
        <form class="moviesearch" name="movietitle" method='post' action="movielist.php">
            <input type="text" name="movie_title">
            <input type="submit">
        </form>
        <form name=moviedetails method='POST' action='moviedetails.php'>
        <?php
            if(isset($_POST['movie_title'])){
                $query = "select * from movie where title like '%".$_POST['movie_title']."%' order by publication_year desc";
            }
            else if(isset($_POST['genre_name'])){
                $query = "select m.movie_id, m.cover_image, m.publication_year, m.title from movie m, movie_genre g where g.genre_name='".$_POST['genre_name']."' and m.movie_id=g.movie_id order by m.publication_year desc";
            }
            else {
                $query = "select * from movie order by publication_year desc";
            }

            include 'includes/sql.php';
            foreach ($conn->query($query) as $row)
            {
                echo "
                        <button name='movieid' class='movieposteroverviewbutton' value='".$row['movie_id']."'>
                            <img class='movieposteroverview' src='".$row['cover_image']."'. alt=''>
                            <h4 class='moviedetails'>".$row['title']."</h4>
                            <h4 class='moviedetails'>".$row['publication_year']."</h4>
                        </button>
                      ";
            }
        ?>
        </form>
    </div>
    </div>
</div>
</body>

</html>