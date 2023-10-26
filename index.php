<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name.'.php';
});





// Hotel

$hh = new Hotel("Hilton", "****", "10 route de la Gare", "67000", "Strasbourg");
$hg = new Hotel("Regent", "****", "61 rue Dauphine", "75006", "Paris");


// Client

$vg = new Client("Virgile", "GIBELLO", "virgile.g@hotmail.fr");
$mm = new Client("Micka", "MURMANN", "micka.m@hotmail.fr");

// Chambre

$ch1 = new Chambre($hh, 1, 2, 120, true);
$ch2 = new Chambre($hh, 2, 2, 120, true);
$ch3 = new Chambre($hh, 3, 2, 120, false);
$ch4 = new Chambre($hh, 4, 2, 120, false);
$ch5 = new Chambre($hh, 5, 2, 120, true);
$ch6 = new Chambre($hh, 6, 2, 120, true);
$ch7 = new Chambre($hh, 7, 2, 120, true);
$ch8 = new Chambre($hh, 8, 2, 120, true);
$ch9 = new Chambre($hh, 9, 2, 120, true);
$ch10 = new Chambre($hh, 10, 2, 120, true);
$ch11 = new Chambre($hh, 11, 2, 120, true);
$ch12 = new Chambre($hh, 12, 4, 300, true);
$ch13 = new Chambre($hh, 13, 4, 300, false);
$ch14 = new Chambre($hh, 14, 4, 300, true);
$ch15 = new Chambre($hh, 15, 4, 300, true);
$ch16 = new Chambre($hh, 16, 4, 300, true);
$ch17 = new Chambre($hh, 17, 4, 300, true);
$ch18 = new Chambre($hh, 18, 2, 120, false);
$ch19 = new Chambre($hh, 19, 2, 120, false);
$ch20 = new Chambre($hh, 20, 2, 120, true);
$ch21 = new Chambre($hg, 21, 2, 120, true);
$ch22 = new Chambre($hg, 22, 2, 120, true);
$ch23 = new Chambre($hg, 23, 2, 120, true);
$ch24 = new Chambre($hg, 24, 2, 120, true);
$ch25 = new Chambre($hg, 25, 2, 120, true);
$ch26 = new Chambre($hg, 26, 2, 120, true);
$ch27 = new Chambre($hg, 27, 4, 300, true);
$ch28 = new Chambre($hg, 28, 4, 300, false);
$ch29 = new Chambre($hg, 29, 4, 300, true);
$ch30 = new Chambre($hg, 30, 4, 300, true);

// Reservation

$resaVir1 = new Reservation("2021-01-01", "2021-01-12", $ch17, $vg);
$resaMic1 = new Reservation("2021-03-11", "2021-03-15", $ch3, $mm);
$resaMic2 = new Reservation("2021-04-01", "2021-04-17", $ch4, $mm);
//$resaMic3 = new Reservation("2021-04-01", "2021-04-02", $ch27, $mm);

// Echo

echo $hh->getInfos();
echo $hg->getInfos();
echo $hh->afficherResaParHotel();
echo $hg->afficherResaParHotel();
echo $mm->afficherResaParClient();
echo $vg->afficherResaParClient();

