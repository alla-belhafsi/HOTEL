<?php

class Client {

    private string $prenom;
    private string $nom;
    private string $email;
    private array $reservations; 

    public function __construct(string $prenom, string $nom, string $email) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->reservations = [];
    }
 
    public function getPrenom() {
        return $this->prenom;
    }
 
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getReservations() {
        return $this->reservations;
    }

    public function setReservations($reservations) {
        $this->reservations = $reservations;
        return $this;
    }

    public function addReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    public function afficherResaParClient() {
        $result = "<br><br><b>Réservations de ".$this."</b><br>".count($this->reservations)." Réservation";
            
        if(count($this->reservations)>1) {
            $result .= "s<br>";
        }

        else{
            $result .= "<br>";
        }
        
        // Initialiser $coutTotal à 0 pour pouvoir obtenir le total aprés la boucle
        $coutTotal = 0;

        foreach($this->reservations as $reservation) {
            $result .="<b>Hotel : </b>".$reservation->getChambre()->getHotel()." / Chambre ".$reservation->getChambre()->getNumChambre()."(".$reservation->getChambre()->getNbLit()." Lits - ".$reservation->getChambre()->getPrix()." - Wifi: ";
            
            if($reservation->getChambre()->getWifi() === true) {
                $result .= "oui) du ";
            }

            else {
                $result .= "non) du ";
            }

        // Calcul de la durée d'une réservation d'une personne
            $result .= $reservation->getDateDebut("d-m-Y")." au ".$reservation->getDateFin("d-m-Y")."<br>";
            $dateDebut = new DateTime($reservation->getDateDebut("Y-m-d"));
            $dateFin = new DateTime($reservation->getDateFin("Y-m-d"));
            $dureeReservation = $dateDebut->diff($dateFin);

        // La valeur total d'une réservation   
            $coutReservation = $reservation->getChambre()->getPrix() * $dureeReservation->days;

        //La valeur total de toutes les réservations    
            $coutTotal += $coutReservation;
        }
        $result .= "Total : ".$coutTotal." €";
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom." ";
    }
}