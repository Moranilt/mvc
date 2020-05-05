<?php
$page = $_GET["page"];
$criteria = $_GET["criteria"];

if(!empty($page)){
  $data = array(
    'tpl' => array('model' => 'model', 'view' => 'view', 'controller' => 'controller', 'template' => 'tpl/template.php')
  );

  foreach($data as $key => $components){
    if($page == $key){
      $db = new DB;
      $model = $components["model"];
      $view = $components["view"];
      $controller = $components["controller"];
      $template = $components["template"];
      break;
    }
  }

  if(isset($model)){
    $m = new $model($db);
    $c = new $controller($m);
    $c->searchName("$criteria");
    $t = $template;
    $v = new $view($m, $t);
    echo $v->output();
  }
}

?>
