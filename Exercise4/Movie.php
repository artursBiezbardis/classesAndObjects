<?php declare(strict_types=1);


class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }


    static function getPG(array $allMovies): array
    {
        if (empty($allMovies)) {
            return $allMovies;
        }
        $pgRated = [];
        $i = 0;
        foreach ($allMovies as $movie) {
            if ($movie->rating === "PG") {
                $pgRated[$i++] = $movie;
            }
        }
        return $pgRated;
    }
}