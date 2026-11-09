<?php
//Class Des
class Des {
    //ATTRIBUT
    private int $nbrface;
    private int $score;

    //CONSTRUCTEUR
    public function __construct(int $newNbrface){
        $this->nbrface = $newNbrface;
        $this->score = 0;
    }

    //GETTER ET SETTER
    public function getNbrface(): int {
        return $this->nbrface;
    }

    public function setNbrface(int $nbrface): self {
        $this->nbrface = $nbrface;
        return $this;
    }

    public function getScore(): int {
        return $this->score;
    }

    public function setScore(int $score): self {
        $this->score = $score;
        return $this;
    }

    //METHOD : lance le dé et retourne un nombre entre 1 et nbrface
    public function lancer():int{
        $this->score = random_int(1, $this->nbrface);
        return $this->score;
    }
}