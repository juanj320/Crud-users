<?php

class connect{

    private $serv = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "crud";

    public function connection(){
        $connection = mysqli_connect($this->serv,$this->user,$this->pass,$this->bd);
        return $connection;
    }
   
}

?>