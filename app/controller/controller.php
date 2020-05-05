<?php
class Controller{
  private $model;

  public function __construct($model){
    $this->model = $model;
  }

  public function searchName($criteria){
    $this->model->filterName($criteria);
  }

  public function users(){
    $this->model->getAllUsers();
  }
}
 ?>
