<?php

class Movie
{

    public $generi;

    function __construct(public string $title, public string $duration, public string $dataUscita, public array $cast, ...$genere)
    {


        $this->title = $title;
        $this->duration = $duration;
        $this->dataUscita = $dataUscita;
        $this->cast = $cast;
        $this->Genres($genere);
    }

    public function Genres($genere)
    {

        foreach ($genere as $value) {

            $this->generi .= $value . ' ';
        }
    }
}
