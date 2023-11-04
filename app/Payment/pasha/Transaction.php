<?php    
declare(strict_types=1);
class Transaction{
    public $balance;
    public $description;
    public function __construct($balance,$description){
        $this->balance=$balance;
        $this->description=$description;
    }
    public function addBalance(int $percent){
        return $this->balance+=$this->balance*$percent/100;
    }
    public function removeBalance(int $percent):float{
        return $this->balance-=$this->balance*$percent/100;
    }
    public function __destruct(){
        echo 'a';
    }
}



    


?>