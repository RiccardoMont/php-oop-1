<?php

require_once __DIR__ . '/../app/Models/Movie.php';

$movies = [
    new Movie(
    'Poor Things', 
    '141min', 
    '25/01/2024', 
    ['Emma Stone', 'Mark Ruffalo', 'Willem Dafoe', 'Ramy Youssef'], 
    'Steampunk', 'Commedia', 'Sentimentale'),
    new Movie(
    'Oppenheimer',
    '180min',
    '23/08/2023',
    ['Cillian Murphy', 'Emily Blunt', 'Matt Damon', 'Florence Pugh'],
    'Thriller', 'Horror', 'Giallo', 'Storico', 'Drammatico', 'Mistero')
];
