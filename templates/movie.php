<?php
// $genres = genreList();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Introduction to MySQL</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
  	
  	
  	<h1><?=$singlemovie->title?></h1>
  	<p>Release Year - <?=$singlemovie->release_date?></p>
  	<p><?=$singlemovie->description?></p>
    <p><?=$singlemovie->duration?></p>
    <?php 
    foreach ($genres as $genre) {
      echo "<strong><span>". $genre['genres'] ."&nbsp;</span></strong>";
    }

    ?>
    <br>
    <!--When this link is clicked, link goes to index page with page= -->
    <!--switches to case with  -->
  	<a href="./?page=edit&amp;id=<?=$singlemovie->id?>">Edit Movie</a>
  	
    <!--When this link is clicked, link goes to index page with page=delete -->
    <!--switches to case with delete -->
  	<a href="./?page=delete&amp;id=<?=$singlemovie->id?>">Delete Movie</a>
  	<br>
    <!--When this link is clicked, link goes to index page with no page information -->
    <!--Therefore, switches to case with home -->
  	<a href="./">Back to Movies List</a>

  </body>
</html>