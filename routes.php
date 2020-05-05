<?php
$model = $_GET["model"];
$view = $_GET["view"];
$controller = $_GET["controller"];
$action = $_GET["action"];
$criteria = $_GET["criteria"];
$db = new DB;
$template = "tpl/template.php";


if(!(empty($model) || empty($view) || empty($controller) || empty($action) || empty($criteria))){
  $m = new $model($db);
  $c = new $controller($m);
  $c->searchName("$criteria");
  $t = "tpl/".$action.".php";
  $v = new $view($m, $t);
  
  echo $v->output();
}
?>
