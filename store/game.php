<?php
require_once __DIR__ . "/item.php";

class Game extends Item {

    private $game_type;


    public function __construct($_name,
                                $_price,
                                $_code,
                                $_game_type){

        parent::__construct($_name, $_price, $_code,);

        $this->game_type = $_game_type;
    }


    public function setGameType($_game_type){
        $this->game_type = $_game_type;
    }

    public function getGameType(){
        return $this->game_type;
    }
}




?>