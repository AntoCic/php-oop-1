<?php
require_once __DIR__ . '/production.php';
class TVSerie extends Production
{
    public $seasons;

    function __construct(string $title, string $linguage, int $vote, int $seasons)
    {
        parent::__construct($title, $linguage, $vote);
        $this->seasons = $seasons;
    }
}
