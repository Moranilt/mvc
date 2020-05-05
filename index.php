<?php
require_once "routes.php";
function __autoload($class_name){
  if(file_exists("./app/".$class_name.".php")){
    require_once "./app/".$class_name.".php";
  }else if(file_exists("./app/controller/".$class_name.".php")){
    require_once "./app/controller/".$class_name.".php";
  }else if(file_exists("./app/model/".$class_name.".php")){
    require_once "./app/model/".$class_name.".php";
  }else if(file_exists("./app/view/".$class_name.".php")){
    require_once "./app/view/".$class_name.".php";
  }

}
/*
$model = new Model();
$controller = new Controller($model);
$view = new View($model, $template);
*/
/*
$template = "tpl/template.php";
$db = new DB;
$model = new Model($db);
$view = new View($model, $template);
$controller = new Controller($model);
$controller->searchName("lily");
*/



echo $_GET["url"];
 ?>
