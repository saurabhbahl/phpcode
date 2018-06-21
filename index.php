<?php
class Name {
    
    public $name = 'Saurabh';
    
    public function getName(){
        return $this->name;
    }
    
    public function editedOnGit() {
           $this->name = "SaurabhBehl"; 
    }
}

$name = new Name();
$user_name = $name->getName();

echo "My Name = ".$user_name."<br>";

$name->editedOnGit();
$gitName = $name->getName();

echo "User Name = ".$gitName;
