<?php

require_once __DIR__ ."/item.php";

class Food extends Item {

  private $food_type;
  private $deadline_date;


  public function __construct($_name,
                              $_price,
                              $_code,
                              $_food_type,
                              $_deadline_date){
      parent::__construct($_name, $_price, $_code,);

      $this->food_type = $_food_type;
      $this->deadline_date = $_deadline_date;
  }


  public function setFoodType($_food_type){
      $this->food_type = $_food_type;
  }
  public function setDeadlineDate($_deadline_date){
    $this->deadline_date = $_deadline_date;
}

  public function getFoodType(){
      return $this->food_type;
  }
  public function getDeadlineDate(){
      return $this->deadline_date;
  }
}
?>