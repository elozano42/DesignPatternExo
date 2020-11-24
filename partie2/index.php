<?php

include 'Employe.php';
include 'Staff.php';
include 'Independant.php';
include 'Usine.php';
include_once('single.php');
include_once('EmployeFactory');
include_once('FactureBuilder');
include_once('UsineFacade.php');


//radio station 
include_once('RadioStation.php');
include_once('StationList.php');


//usine facade
$usine = new UsineFacade(new Usine());
$usine->openUsine();
$usine->closeUsine();


//station
$stationList = new StationList();
$station1 = new RadioStation(100);

$stationList->addStation($station1);
$stationList->addStation(new RadioStation(150, 2));
$stationList->addStation(new RadioStation(101, 2));
$stationList->addStation(new RadioStation(104, 2));
$stationList->addStation(new RadioStation(99, 2));

echo $stationList->current()->getFrequency(), PHP_EOL;
$stationList->next();
echo $stationList->key() . PHP_EOL;
echo $stationList->current()->getFrequency() . PHP_EOL;

foreach ($stationList as $station) {
  echo $station->getFrequency() . PHP_EOL;
}


//Facture
$PriceBuilder = (new PriceBuilder(14))
  ->addSalary()
  ->addIndependant();


$employees = Staff::getInstance();

$listInvoice1 = [
  new InvoiceBuilder('2020-10-02', 1500, 'Facture 1'),
  new InvoiceBuilder('2020-10-04', 1700, 'Facture 2'),
  new InvoiceBuilder('2020-10-05', 3500, 'Facture 3'),
];

$listInvoice2 = [
  new InvoiceBuilder('2020-10-02', 1500, 'Facture 1'),
  new InvoiceBuilder('2020-10-04', 4500, 'Frais de déplacement -'),
  new InvoiceBuilder('2020-10-05', 1500, 'Facture 3'),
];

$myEmployees = new Staff();
$myEmployees->add(new Salesman("Pierre", "Business", 45, "1995", 30000));
$myEmployees->add(new Representant("Léon", "Ventout", 25, "2001", 20000));
$myEmployees->add(new Producer("Yves", "Ahalouest", 28, "1998", 1000));
$myEmployees->add(new Wharehouseman("Jeanne", "Stoktout", 32, "1998", 45));
$myEmployees->add(new ProducerWithRisk("Jean", "Flippe", 28, "2000", 1000));
$myEmployees->add(new Independant("tata", "Stoktout", 30, "2011", 569032, $listInvoice1));
$myEmployees->add(new Independant("tutu", "Ahalouest", 30, "2013", 320910, $listInvoice2));

$myEmployees->displaySalaries();
$myEmployees->displayAverageSalary();
