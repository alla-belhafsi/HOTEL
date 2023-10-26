<?php

class Hotel {

    private string $nomHotel;
    private string $etoile;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $chambres;
    private array $reservations;
    

    public function __construct(string $nomHotel, string $etoile, string $adresse, string $cp, string $ville) {
        $this->nomHotel = $nomHotel;
        $this->etoile = $etoile;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->chambres = [];
        $this->reservations = [];
    }

    public function getNomHotel() {
        return $this->nomHotel;
    }

    public function setNomHotel($nomHotel) {
        $this->nomHotel = $nomHotel;
        return $this;
    }

    public function getEtoile() {
        return $this->etoile;
    }

    public function setEtoile($etoile) {
        $this->etoile = $etoile;
        return $this;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function getCp() {
        return $this->cp;
    }
 
    public function setCp($cp) {
        $this->cp = $cp;
        return $this;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    public function getChambres() {
        return $this->chambres;
    }

    public function setChambres($chambres) {
        $this->chambres = $chambres;
        return $this;
    }

    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    public function getInfos() {
        $result = "<br><b>".$this->nomHotel." ".$this->etoile." ".$this->ville."</b><br>".$this->adresse." ".$this->cp." ".$this->ville;
        
        $result .= "<br>Nombre de chambres : ".count($this->chambres)."<br>Nombre de chambres réservées : ". count($this->reservations)."<br>Nombre de chambres dispo : ".count($this->chambres) - count($this->reservations)."<br>";
        return $result;
    }

    public function afficherResaParHotel() {
        $result = "<br><b> Réservations de l'hôtel ".$this->nomHotel." ".$this->etoile." ".$this->ville."</b><br>";
        
        if(count($this->reservations)<1) {
            $result .= "Aucune réservation !";
        }

        elseif(count($this->reservations)>0) {
            $result .= count($this->reservations)." Réservations<br>";
        }

        foreach($this->reservations as $reservation) {
            $result.= $reservation->getInfos();
        }
        return $result;
    }
    
    public function __toString() {
        return $this->nomHotel." ".$this->etoile." ".$this->ville."<br>".$this->adresse." ".$this->cp." ".$this->ville;
    }
}