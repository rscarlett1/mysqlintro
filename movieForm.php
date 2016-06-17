<?php

if(isset($GET_['id'])){
  $verb = "Edit";
  $action = "./?page=edit";

}else{
  $verb = "Add";
  $action = "./?page=add";
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Introduction to MySQL</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

  <h1><?=$verb;?>Edit Movie</h1> 

  <form method="post" action="<?=$action?>">

    <input type="hidden" name="id" value="<?=$singlemovie['id']?>">
    <div>
      <label>Title</label>
      <input type = "text" name="title" value="<?= $singlemovie['title']?>">
    </div>

    <div>
      <label>Description</label>
      <textarea name= "description" value=""><?=$singlemovie['description']?></textarea>

    </div>

    <div>
      <label>Rating</label>
      <select name ="rating">

        <option value="PGR">PGR</option>
        <option value="R">R</option>
        <option value = "M">M</option>
        <option value="G">G</option>
    </div>

    <div>
      <label>Year Released</label>
      <input type="year" name="release_date" value="<?=$singlemovie['release_date']?>"> 
    </div>

    <div>
      <label>Duration</label>
      <input type="number" name="duration" value="<?=$singlemovie['duration']?>">
    </div>

    <button type= "Submit ">Submit</button>

    </form>


  </body>
</html>