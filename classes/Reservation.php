<?php

class Reservation {

    private DateTime $dateDebut;
    private Datetime $dateFin;
    private Chambre $chambre;
    private Client $client;

    public function __construct(string $dateDebut, string $dateFin, Chambre $chambre, Client $client) {
        $this->chambre = $chambre;
        $this->client = $client;
        $this->dateDebut = new DateTime($dateDebut);
        $this->dateFin = new DateTime($dateFin);
        $this->chambre->addReservation($this);
        $this->client->addReservation($this);
        $this->chambre->getHotel()->addReservation($this);
    }

    public function getDateDebut() {
        return $this->dateDebut->format("d-m-Y");
    }

    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin() {
        return $this->dateFin->format("d-m-Y");
    }

    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getChambre() {
        return $this->chambre;
    }

    public function setChambre($chambre) {
        $this->chambre = $chambre;
        return $this;
    }

    public function getClient() {
        return $this->client;
    }

    public function setClient($client) {
        $this->client = $client;
        return $this;
    }

    public function getInfos() {
        return $this->client." - Chambre ".$this->chambre->getNumChambre()." - du ".$this->dateDebut->format("d-m-Y")." au ".$this->dateFin->format("d-m-Y")."<br>";
    }

    public function __toString() {
        return $this->dateDebut." ".$this->dateFin." ".$this->chambre." ".$this->client;
    }
}