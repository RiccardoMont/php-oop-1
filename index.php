<?php


require_once __DIR__ . '/database/db.php';


/*public static function print_var_name($var) {
        foreach($GLOBALS as $var_name => $value) {
            if ($value === $var) {
                //global $title;
                //return $title = $var_name;
                return $var_name;
            }
        }
    
        return false;
    }*/

/*
    function __construct($titlePar){
       
        $this->title = $this->print_var_name($titlePar);

    }*/




/*class Genres {

    public $genere;

    public $generi = [

    ];

    function __construct(...$genere) {
        foreach($genere as $value){
        array_push($this->generi, $value);
        }
    }


}*/

/*function nomeMovie($title){
    
    $title->title = $title ->print_var_name($title);

}*/
/*
$arr1 = [
$PoorThings => new Movie('141min', '25/01/2024'),
$Oppenheimer => new Movie('180min', '23/08/2023')
];

var_dump($arr1(1));*/
/*$gen = new Genres('Steampunk', 'Commedia', 'Sentimentale');
var_dump($gen);*/



//$movies = [$PoorThings, $Oppenheimer];

//var_dump($Oppenheimer);
//$PoorThings->title = $PoorThings ->print_var_name($PoorThings);
//$Oppenheimer->title = $Oppenheimer ->print_var_name($Oppenheimer);
//var_dump($PoorThings);
//var_dump(Genres);




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


    <?php foreach ($movies as $movie) : ?>
        <h3><?php echo $movie->title ?></h3>
        <span>Durata: <?= $movie->duration ?></span>
        <br>
        <span>Data di uscita: <?= $movie->dataUscita ?></span>
        <br>
        <span>Genere: <?= $movie->generi ?></span>
        <br>
        <span>Cast: </span>
        <ul style="display:inline-block;">
            <?php foreach ($movie->cast as $actor) : ?>
                <li style="display:inline-block; "> <?= $actor ?></li>
                <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    <br>

    <!--<form action="" method="post">
    <input type="text" name="title">
    <input type="submit">
    </form>-->
</body>

</html>