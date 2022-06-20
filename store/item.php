<?php

class Item{
    private $name;
    private $price;
    private $code;

    public function __construct($_name,
                                $_price,
                                $_code){

    $this->name = $_name;
    $this->price = $_price;
    $this->code = $_code;
}

public function setName($_name){
    $this->name = $_name;
}
public function setPrice($_price){
    $this->price = $_price;
}
public function setCode($_code){
    $this->code = $_code;
}


public function getName(){
    return $this->name;
}
public function getPrice(){
    return $this->price;
}
public function getCode(){
    return $this->code;
}

}


?>