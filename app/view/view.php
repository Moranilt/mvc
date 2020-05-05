<?php
class View{
  private $model;
  private $temlate;

  public function __construct($model, $template){
    $this->model = $model;
    $this->template = $template;
  }

  public function output(){
    $data = $this->model->getUser();
    $users = $this->model->getAllUsers();
    return $this->template;
  }
}
 ?>
