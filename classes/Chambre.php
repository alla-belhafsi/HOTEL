<?php

class Chambre {
    
    private Hotel $hotel;
    private int $numChambre;
    private int $nbLit;
    private float $prix;
    private bool $wifi;
    private array $reservations;
    
    public function __construct(Hotel $hotel, int $numChambre, int $nbLit, float $prix, bool $wifi) {
        $this->hotel = $hotel;
        $this->numChambre = $numChambre;
        $this->nbLit = $nbLit;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->hotel->addChambre($this);
        $this->reservations = [];
    }

    public function getHotel() {
        return $this->hotel;
    }

    public function setHotel($hotel) {
        $this->hotel = $hotel;
        return $this;
    }
    
    public function getNumChambre() {
        return $this->numChambre;
    }
    
    public function setNumChambre($numChambre) {
        $this->numChambre = $numChambre;
        return $this;
    }

    public function getNbLit() {
        return $this->nbLit;
    }

    public function setNbLit($nbLit) {
        $this->nbLit = $nbLit;
        return $this;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }

    public function getWifi() {
        return $this->wifi;
    }

    public function setWifi($wifi) {
        $this->wifi = $wifi;
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
}