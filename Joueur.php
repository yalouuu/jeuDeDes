<?php
class Joueur {
    private string $nom;
    private int $valeurLance;
    private Des $des;

    //constructeur
    public function __construct(string $newNom, Des $newDes){
        $this->nom = $newNom;
        $this->des = $newDes;
        $this->valeurLance = 0;
    }

    //getter setter
    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    public function getValeurLance(): int {
        return $this->valeurLance;
    }

    public function setValeurLance(int $valeurLance): self {
        $this->valeurLance = $valeurLance;
        return $this;
    }

    public function getDes(): Des {
        return $this->des;
    }

    public function setDes(Des $des): self {
        $this->des = $des;
        return $this;
    }

    public function lancerDes():void{
        $this->valeurLance = $this->des->lancer();
    }
}