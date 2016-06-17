<?php
genreList();
// var_dump($singlemovie);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Introduction to MySQL</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>


  <!--When this link is clicked , Link goes to index page with page= -->
  <!--switches to case with -->
  <a href="./?page=movieForm&amp;id=<?=$singlemovie['id']?>">Edit Movie</a>

  	
  	
  	<h1><?=$singlemovie['title']?></h1>
  	<p>Release Year - <?=$singlemovie['release_date']?></p>
  	<p><?=$singlemovie['description']?></p>

  	<a href="">Edit Movie</a>
  	<br>
  	<a href="./?page=delete&amp;id=<?=$singlemovie['id']?>">Delete Movie</a>
  	<br>
  	<a href="./">Back to Movies List</a>

  </body>
</html>