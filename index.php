<?php
class Name {
    
    public function getName(){
        echo 'Saurabh';
    }
}

$name = new Name();
$user_data = $name->getName();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $user_data;
        ?>
    </body>
</html>
