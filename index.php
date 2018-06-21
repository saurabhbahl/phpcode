<?php
class Name {
    
    public $name = 'Saurabh'
    
    public function getName(){
        return $this->name;
    }
    
    public function editedOnGit() {
           $this->name = "Saurabh's Git"; 
    }
}

$name = new Name();
$user_name = $name->getName();

echo "My Name = ".$user_name;

$name->editedOnGit();
$gitName = $name->getName();

echo "User Name = ".$gitName;
