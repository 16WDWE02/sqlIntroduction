<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Introduction to MySQL</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
  	
  	
  	<h1>Movies List</h1>
    <a href="./?page=add">Add Movie</a>
    <!--When the link is clicked, link goes to index page with page=movie -->
    <!--switches to case with movie -->
    <?php
      foreach ($movies as $movie) {
        echo '<li><a href="./?page=movie&amp;id='. $movie['id'].'">' . $movie['id'] .'. '. $movie['title'] . '</a></li>';
      }


    ?>
  </body>
</html>