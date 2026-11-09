<?php
//Class Partie
class Partie {
    //ATTRIBUT
    private Joueur $joueur1;
    private Joueur $joueur2;
    private int $nbrTour;
    private int $scoreJ1;
    private int $scoreJ2;

    //CONSTRUCTEUR
    public function __construct(Joueur $newJoueur1, Joueur $newJoueur2, int $newNbrTour){
        $this->joueur1 = $newJoueur1;
        $this->joueur2 = $newJoueur2;
        $this->nbrTour = $newNbrTour;
        $this->scoreJ1 = 0;
        $this->scoreJ2 = 0;
    }

    //GETTER ET SETTER
    public function getJoueur1(): Joueur {
        return $this->joueur1;
    }

    public function setJoueur1(Joueur $joueur1): self {
        $this->joueur1 = $joueur1;
        return $this;
    }

    public function getJoueur2(): Joueur {
        return $this->joueur2;
    }

    public function setJoueur2(Joueur $joueur2): self {
        $this->joueur2 = $joueur2;
        return $this;
    }

    public function getNbrTour(): int {
        return $this->nbrTour;
    }

    public function setNbrTour(int $nbrTour): self {
        $this->nbrTour = $nbrTour;
        return $this;
    }

    public function getScoreJ1(): int {
        return $this->scoreJ1;
    }

    public function setScoreJ1(int $scoreJ1): self {
        $this->scoreJ1 = $scoreJ1;
        return $this;
    }

    public function getScoreJ2(): int {
        return $this->scoreJ2;
    }

    public function setScoreJ2(int $scoreJ2): self {
        $this->scoreJ2 = $scoreJ2;
        return $this;
    }

    //METHOD : joue tous les tours puis affiche le gagnant
    public function lancerPartie():void{
        //Boucle sur le nombre de tours
        for($i = 1; $i <= $this->nbrTour; $i++){
            echo("--- Tour ".$i." ---".PHP_EOL);

            //1. Les deux joueurs lancent leur dé
            $this->joueur1->lancerDes();
            $this->joueur2->lancerDes();

            $lance1 = $this->joueur1->getValeurLance();
            $lance2 = $this->joueur2->getValeurLance();

            echo($this->joueur1->getNom()." fait ".$lance1.PHP_EOL);
            echo($this->joueur2->getNom()." fait ".$lance2.PHP_EOL);

            //2. Attribution des points
            if($lance1 > $lance2){
                $this->scoreJ1 += 2;
            }elseif($lance1 == $lance2){
                $this->scoreJ1 += 1;
                $this->scoreJ2 += 1;
            }else{
                $this->scoreJ2 += 2;
            }
        }

        //3. Affichage du gagnant
        echo(PHP_EOL."=== Fin de la partie ===".PHP_EOL);

        if($this->scoreJ1 > $this->scoreJ2){
            echo($this->joueur1->getNom()." gagne avec ".$this->scoreJ1." points !");
        }elseif($this->scoreJ2 > $this->scoreJ1){
            echo($this->joueur2->getNom()." gagne avec ".$this->scoreJ2." points !");
        }else{
            echo("Égalité : ".$this->scoreJ1." points chacun !");
        }
    }
}