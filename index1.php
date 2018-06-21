<?php

class Index1{
    
    public $index1;
    
    public function setIndex1($index){
        $this->index1 = $index;
    }


    public function  getIndex1(){
       return $this->index1;
    }
       
}   

$index1 = new Index1(); 

$index1->setIndex1('REJECTED_NONFASTFORWARD');

echo $index1->getIndex1();
