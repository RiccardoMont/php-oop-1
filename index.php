<?php

class Movie {

    public $title;
    public $duration;
    public $dataUscita;

    function __construct($duration, $dataUscita){
        


        $this->duration = $duration;
        $this->dataUscita = $dataUscita;


    }

    
    public function print_var_name($var) {
        foreach($GLOBALS as $var_name => $value) {
            if ($value === $var) {
                //global $title;
                //return $title = $var_name;
                return $var_name;
            }
        }
    
        return false;
    }

    /*
    function __construct($titlePar){
       
        $this->title = $this->print_var_name($titlePar);

    }*/
    

    

}


$PoorThings = new Movie('141min', '25/01/2024');
$Oppenheimer = new Movie('180min', '23/08/2023');


var_dump($Oppenheimer);
var_dump($PoorThings);
$PoorThings->title = $PoorThings ->print_var_name($PoorThings);
$Oppenheimer->title = $Oppenheimer ->print_var_name($Oppenheimer);
var_dump($PoorThings);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oscar Movies</title>
</head>
<body>
<h1>Oscar Movies</h1>


    <p><?php foreach($PoorThings as $key => $value){
            echo "$key : $value <br>";
        
        }?></p>
    <br>
    <p><?php foreach($Oppenheimer as $key => $value){
            echo "$key : $value <br>";
        
        }?></p>

</body>
</html>