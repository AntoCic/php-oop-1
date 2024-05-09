<?php
class Production
{
    public $title;
    public $linguage;
    public $vote;

    function __construct(string $title, string $linguage, int $vote)
    {
        $this->title = $title;
        $this->linguage = $linguage;
        $this->setVote($vote);
    }

    public function setVote(int $vote): void
    {
        if ($vote > 0 && $vote <= 10) {
            $this->vote = $vote;
        } else {
            var_dump('il valore assegnato a voto non é tra 1 e 10');
        }
    }
}