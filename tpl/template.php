
<!DOCTYPE html>
<html>
 <head>
  <meta charset="charset=utf-8">
  <title>The Template name</title>
 </head>
 <body>
  <h3 style="color:red;"><?php print_r($users); ?></h1>
  <h3 style="color:red;"><?php print_r($data); ?></h1>
  <a href="index.php?page=tpl&criteria=lily&method=searchName">Link</a>
  <?php
    foreach($users as $user){
      echo $user["id"]." - ".$user["firstname"]. " - ". $user["login"]."<br />";
    }
   ?>

 </body>
</html>
