<?php

$page = $_GET["page"];
$criteria = $_GET["criteria"];
$meth = $_GET["method"];

if(!empty($page)){
  $data = array(
    'home' => array('model' => 'model', 'view' => 'view', 'controller' => 'controller', 'method' => "$meth", 'template' => 'tpl/home.php'),
    'tpl' => array('model' => 'model', 'view' => 'view', 'controller' => 'controller', 'method' => "$meth", 'template' => 'tpl/template.php')
  );

  foreach($data as $key => $components){
    if($page == $key){
      $db = new DB;
      $model = $components["model"];
      $view = $components["view"];
      $controller = $components["controller"];
      $template = $components["template"];
      $method = $components["method"];
      break;
    }
  }

  if(isset($model)){
    $m = new $model($db);
    $c = new $controller($m);
    $c->$method("$criteria");
    $t = $template;
    $v = new $view($m, $t);
    return $v->output();
  }
}

?>
