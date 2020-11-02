<?php
require_once 'Movie.php';

$allMovies =
    [
        new Movie('Casino Royale', 'Eon Productions', 'PG13'),
        new Movie('Glass', 'Buena Vista International', 'PG13'),
        new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'),
        new Movie('Casino Royale animals', 'Eon Productions', 'PG'),

    ];

var_dump(Movie::getPG($allMovies));