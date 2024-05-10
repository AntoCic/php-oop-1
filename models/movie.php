<?php
require_once __DIR__ . '/production.php';
class Movie extends Production
{
    public $profitti;
    public $durata;

    function __construct(string $title, string $linguage, int $vote, string $profitti, string $durata)
    {
        parent::__construct($title, $linguage, $vote);
        $this->profitti = $profitti;
        $this->durata = $durata;
    }
}
