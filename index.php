<?php
define("DIR", "app/");
require_once DIR."model/model.php";
require_once DIR."controller/controller.php";
require_once DIR."view/view.php";

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
$controller->searchName("danil");



echo $view->output();
 ?>
