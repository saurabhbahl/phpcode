<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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

$index1->getIndex1();
