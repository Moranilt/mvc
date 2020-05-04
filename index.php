<?php
require_once "model.php";
require_once "controller.php";
require_once "view.php";
/*
$model = new Model();
$controller = new Controller($model);
$view = new View($model, $template);
*/
/*new comment*/
$template = "tpl/template.php";
$db = new DB;
$model = new Model($db);
$view = new View($model, $template);
$controller = new Controller($model);
$controller->searchName("danil");



echo $view->output();
 ?>
