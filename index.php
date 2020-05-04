<?php
define("DIR", "app/");
require DIR."model/model.php";
require DIR."controller/controller.php";
require DIR."view/view.php";
require DIR."model/db.php";

/*
$model = new Model();
$controller = new Controller($model);
$view = new View($model, $template);
*/

$template = "tpl/template.php";
$db = new DB;
$model = new Model($db);
$view = new View($model, $template);
$controller = new Controller($model);
$controller->searchName("lily");



echo $view->output();
 ?>
